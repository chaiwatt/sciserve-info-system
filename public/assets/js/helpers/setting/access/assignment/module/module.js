import * as RequestApi from '../../../../request-api.js';

var token = window.params.token

$(document).on('click', '#un_assignment_module_button', function () {

    var groupId = $(this).data('id');
    var roleId = $(this).data('role');
    var moduleJsonUrl = window.params.moduleJsonRoute;

    // Additional code logic here...

    var dataSet = {
        'groupId': groupId,
        'roleId': roleId
    }
    RequestApi.postRequest(dataSet, moduleJsonUrl, token).then(response => {
        var group_data = JSON.parse(response);

        // Convert string "true" and "false" to boolean values
        function convertToBoolean(value) {
            return value === "true";
        }

        group_data = JSON.parse(JSON.stringify(group_data), function (key, value) {
            if (typeof value === "string") {
                if (value === "true" || value === "false") {
                    return convertToBoolean(value);
                }
            }
            return value;
        });

        // return
        var table = document.getElementById("module_modal_table");
        var tbody = table.getElementsByTagName("tbody")[0];
        tbody.innerHTML = '';


        group_data.forEach(function (module) {
            var moduleName = module.module_name;
            var moduleID = module.module_id;
            var enable = module.enable;

            module.menus.forEach(function (menu) {
                var menuRow = document.createElement("tr");

                if (menu === module.menus[0]) {
                    var moduleNameCell = document.createElement("td");
                    var enableCell = document.createElement("td");

                    moduleNameCell.textContent = moduleName;

                    // Create a div with icheck-primary and d-inline classes
                    var enableDiv = document.createElement("div");
                    enableDiv.className = "icheck-primary d-inline";

                    // Create an input element with icheck-bootstrap class
                    var enableInput = document.createElement("input");
                    enableInput.type = "checkbox";
                    enableInput.id = "checkbox_" + moduleName;
                    enableInput.checked = enable;

                    // Create a label element
                    var enableLabel = document.createElement("label");
                    enableLabel.setAttribute("for", "checkbox_" + moduleName);

                    enableDiv.appendChild(enableInput);
                    enableDiv.appendChild(enableLabel);
                    enableCell.appendChild(enableDiv);

                    moduleNameCell.rowSpan = module.menus.length;
                    enableCell.rowSpan = module.menus.length;

                    menuRow.appendChild(moduleNameCell);
                    menuRow.appendChild(enableCell);
                }

                var menuNameCell = document.createElement("td");
                var showCell = document.createElement("td");
                var createCell = document.createElement("td");
                var updateCell = document.createElement("td");
                var deleteCell = document.createElement("td");

                menuNameCell.textContent = menu.menu_name;
                menuNameCell.style.paddingLeft = "10px";

                // Create a div with icheck-primary and d-inline classes for show permission
                var showDiv = document.createElement("div");
                showDiv.className = "icheck-primary d-inline";

                // Create an input element with icheck-bootstrap class
                var showInput = document.createElement("input");
                showInput.type = "checkbox";
                showInput.id = "show_" + menu.menu_name;
                showInput.checked = enable ? menu.permissions.show : false;

                // Create a label element
                var showLabel = document.createElement("label");
                showLabel.setAttribute("for", "show_" + menu.menu_name);

                showDiv.appendChild(showInput);
                showDiv.appendChild(showLabel);
                showCell.appendChild(showDiv);

                // Create a div with icheck-primary and d-inline classes for create permission
                var createDiv = document.createElement("div");
                createDiv.className = "icheck-primary d-inline";

                // Create an input element with icheck-bootstrap class
                var createInput = document.createElement("input");
                createInput.type = "checkbox";
                createInput.id = "create_" + menu.menu_name;
                createInput.checked = enable ? menu.permissions.create : false;

                // Create a label element
                var createLabel = document.createElement("label");
                createLabel.setAttribute("for", "create_" + menu.menu_name);

                createDiv.appendChild(createInput);
                createDiv.appendChild(createLabel);
                createCell.appendChild(createDiv);

                // Create a div with icheck-primary and d-inline classes for update permission
                var updateDiv = document.createElement("div");
                updateDiv.className = "icheck-primary d-inline";

                // Create an input element with icheck-bootstrap class
                var updateInput = document.createElement("input");
                updateInput.type = "checkbox";
                updateInput.id = "update_" + menu.menu_name;
                updateInput.checked = enable ? menu.permissions.update : false;

                // Create a label element
                var updateLabel = document.createElement("label");
                updateLabel.setAttribute("for", "update_" + menu.menu_name);

                updateDiv.appendChild(updateInput);
                updateDiv.appendChild(updateLabel);
                updateCell.appendChild(updateDiv);

                // Create a div with icheck-primary and d-inline classes for delete permission
                var deleteDiv = document.createElement("div");
                deleteDiv.className = "icheck-primary d-inline";

                // Create an input element with icheck-bootstrap class
                var deleteInput = document.createElement("input");
                deleteInput.type = "checkbox";
                deleteInput.id = "delete_" + menu.menu_name;
                deleteInput.checked = enable ? menu.permissions.delete : false;

                // Create a label element
                var deleteLabel = document.createElement("label");
                deleteLabel.setAttribute("for", "delete_" + menu.menu_name);

                deleteDiv.appendChild(deleteInput);
                deleteDiv.appendChild(deleteLabel);
                deleteCell.appendChild(deleteDiv);

                menuRow.appendChild(menuNameCell);
                menuRow.appendChild(showCell);
                menuRow.appendChild(createCell);
                menuRow.appendChild(updateCell);
                menuRow.appendChild(deleteCell);

                tbody.appendChild(menuRow);
            });
        });

        showModuleModal();

        function getUpdatedValues() {
            var updatedGroup = [];

            group_data.forEach(function (module) {
                var moduleName = module.module_name;
                var moduleID = module.module_id;
                var enableCheckbox = document.getElementById("checkbox_" + moduleName);

                var updatedModule = {
                    'module_id': moduleID,
                    'module_name': moduleName,
                    'enable': enableCheckbox.checked,
                    'menus': [],
                };

                module.menus.forEach(function (menu) {
                    var menuCheckbox = document.getElementById("show_" + menu.menu_name);
                    var createCheckbox = document.getElementById("create_" + menu.menu_name);
                    var updateCheckbox = document.getElementById("update_" + menu.menu_name);
                    var deleteCheckbox = document.getElementById("delete_" + menu.menu_name);

                    if (enableCheckbox.checked) {
                        var updatedmenu = {
                            'menu_id': menu.menu_id,
                            'menu_name': menu.menu_name,
                            'permissions': {
                                'show': menuCheckbox.checked,
                                'create': createCheckbox.checked,
                                'update': updateCheckbox.checked,
                                'delete': deleteCheckbox.checked,
                            },
                        };
                    } else {
                        // If the parent module is disabled, uncheck all the menu checkboxes
                        menuCheckbox.checked = false;
                        createCheckbox.checked = false;
                        updateCheckbox.checked = false;
                        deleteCheckbox.checked = false;

                        var updatedmenu = {
                            'menu_id': menu.menu_id,
                            'menu_name': menu.menu_name,
                            'permissions': {
                                'show': false,
                                'create': false,
                                'update': false,
                                'delete': false,
                            },
                        };
                    }

                    updatedModule.menus.push(updatedmenu);
                });

                updatedGroup.push(updatedModule);
            });

            return updatedGroup;
        }

        $(document).on('click', '#bntSaveModule', function (event) {
            var updatedValues = getUpdatedValues();
            var updateModuleJsonUrl = window.params.updateModuleJsonRoute;
            var dataSet = {
                'groupId': groupId,
                'roleId': roleId,
                'updatedValues': updatedValues
            }
            RequestApi.postRequest(dataSet, updateModuleJsonUrl, token).then(response => {
                $('#modal-module').modal('hide');
                // Reload the window
                location.reload();
            });
        });

        // Get all values that may have changed (e.g., checkbox states) and return them in the same JSON format

        // Reload the window

    });


});

function showModuleModal() {
    $('#modal-module').modal('show');
}


