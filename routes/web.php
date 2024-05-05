<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\PowerBIApiController;
use App\Http\Controllers\SettingUserController;
use App\Http\Controllers\SettingGeneralController;
use App\Http\Controllers\SocialiteLoginController;
use App\Http\Controllers\SettingAccessRoleController;
use App\Http\Controllers\SettingAccessAssignmentRoleController;
use App\Http\Controllers\GroupsReportSystemReportListController;
use App\Http\Controllers\GroupsReportSystemReportSettingController;
use App\Http\Controllers\SettingAccessAssignmentGroupModuleController;
use App\Http\Controllers\GroupsAccreditationSystemSettingExpertController;
use App\Http\Controllers\GroupsAccreditationSystemSettingGeneralController;
use App\Http\Controllers\GroupsAccreditationSystemSettingCriteriaController;
use App\Http\Controllers\GroupsAnnouncementSystemAnnouncementListController;
use App\Http\Controllers\GroupsAnnouncementSystemAccreditationListController;
use App\Http\Controllers\GroupsAccreditationSystemAccreditationListController;
use App\Http\Controllers\GroupsAnnouncementSystemAnnouncementSettingController;
use App\Http\Controllers\GroupsAccreditationSystemAccreditationSettingController;
use App\Http\Controllers\GroupsAccreditationSystemAccreditationAssignmentController;
use App\Http\Controllers\GroupsAccreditationSystemAccreditationListAssignmentUserController;
use App\Http\Controllers\GroupsAccreditationSystemAccreditationSettingUserAssignmentController;
use App\Http\Controllers\GroupsAccreditationSystemAccreditationListAssignmentCriteriaController;
use App\Http\Controllers\GroupsAccreditationSystemAccreditationSettingCriteriaAssignmentController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'socialite'], function () {
    Route::group(['prefix' => 'keycloak'], function () {
        Route::get('login', [SocialiteLoginController::class, 'login'])->name('socialite.keycloak.login');
        Route::get('callback', [SocialiteLoginController::class, 'callback'])->name('socialite.keycloak.callback');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::group(['prefix' => 'setting', 'middleware' => 'admin'], function () {
        Route::get('', [SettingController::class, 'index'])->name('setting');
            Route::group(['prefix' => 'user'], function () {
                Route::get('', [SettingUserController::class, 'index'])->name('setting.user');
                Route::get('create', [SettingUserController::class, 'create'])->name('setting.user.create');
                Route::get('import', [SettingUserController::class, 'import'])->name('setting.user.import');
                Route::post('store', [SettingUserController::class, 'store'])->name('setting.user.store');
                Route::get('{id}', [SettingUserController::class, 'view'])->name('setting.user.view');
                Route::put('{id}', [SettingUserController::class, 'update'])->name('setting.user.update');
            });
            Route::group(['prefix' => 'general'], function () {
                Route::get('search-filter', [SettingGeneralController::class, 'searchFilter'])->name('setting.search-filter');
                Route::get('industry-resource', [SettingGeneralController::class, 'industryResource'])->name('setting.industry-resource');
                Route::get('quality-resource', [SettingGeneralController::class, 'qualityResource'])->name('setting.quality-resource');
            });
    });
    Route::group(['prefix' => 'access'], function () {
        Route::group(['prefix' => 'role'], function () {
            Route::get('', [SettingAccessRoleController::class, 'index'])->name('setting.access.role');
        });
        Route::group(['prefix' => 'assignment'], function () {
            Route::group(['prefix' => 'group-module'], function () {
                Route::get('{id}', [SettingAccessAssignmentGroupModuleController::class, 'view'])->name('setting.access.assignment.group-module.view');
                Route::post('store', [SettingAccessAssignmentGroupModuleController::class, 'store'])->name('setting.access.assignment.group-module.store');
                Route::delete('roles/{roleId}/groups/{groupId}/delete', [SettingAccessAssignmentGroupModuleController::class, 'delete'])->name('setting.access.assignment.group-module.delete');
                Route::post('update-module-json', [SettingAccessAssignmentGroupModuleController::class, 'updateModuleJson'])->name('setting.access.assignment.group-module.update-module-json');
            });
            Route::group(['prefix' => 'role'], function () {
                Route::post('store', [SettingAccessAssignmentRoleController::class, 'store'])->name('setting.access.assignment.role.store');
                Route::get('roles/{roleId}/users/{userId}/delete', [SettingAccessAssignmentRoleController::class, 'delete'])->name('setting.access.assignment.role.delete');
            });
        });
    });

    Route::group(['prefix' => 'api'], function () {
        Route::get('get-group', [ApiController::class, 'getGroup'])->name('api.get-group');
        Route::post('get-module-json', [ApiController::class, 'getModuleJson'])->name('api.get-module-json');
        Route::get('get-user', [ApiController::class, 'getUser'])->name('api.get-user');
    });

    Route::group(['prefix' => 'group'], function () {
        Route::group(['prefix' => 'accreditation-system'], function () {
            Route::group(['prefix' => 'accreditation'], function () {
                Route::group(['prefix' => 'list'], function () {
                    Route::get('', [GroupsAccreditationSystemAccreditationListController::class,'index'])->name('groups.accreditation-system.accreditation.list');
                    Route::get('create', [GroupsAccreditationSystemAccreditationListController::class,'create'])->name('groups.accreditation-system.accreditation.list.create');
                    Route::post('store', [GroupsAccreditationSystemAccreditationListController::class,'store'])->name('groups.accreditation-system.accreditation.list.store');
                });
                Route::group(['prefix' => 'assignment'], function () {
                    Route::get('', [GroupsAccreditationSystemAccreditationAssignmentController::class,'index'])->name('groups.accreditation-system.accreditation.assignment');
                });
            });
            Route::group(['prefix' => 'setting'], function () {
                Route::group(['prefix' => 'general'], function () {
                    Route::get('', [GroupsAccreditationSystemSettingGeneralController::class,'index'])->name('groups.accreditation-system.setting.general');
                    Route::get('external-api', [GroupsAccreditationSystemSettingGeneralController::class,'externalApi'])->name('groups.accreditation-system.setting.general.external-api');
                    
                });
                Route::group(['prefix' => 'expert'], function () {
                    Route::get('', [GroupsAccreditationSystemSettingExpertController::class,'index'])->name('groups.accreditation-system.setting.expert');
                });
                Route::group(['prefix' => 'criteria'], function () {
                    Route::get('', [GroupsAccreditationSystemSettingCriteriaController::class,'index'])->name('groups.accreditation-system.setting.criteria');
                });
            });
        });
        Route::group(['prefix' => 'announcement-system'], function () {
            Route::group(['prefix' => 'announcement'], function () {
                Route::group(['prefix' => 'list'], function () {
                    Route::get('', [GroupsAnnouncementSystemAnnouncementListController::class,'index'])->name('groups.announcement-system.announcement.list');
                });
                Route::group(['prefix' => 'setting'], function () {
                    Route::get('', [GroupsAnnouncementSystemAnnouncementSettingController::class,'index'])->name('groups.announcement-system.announcement.setting');
                });
            });
        });
        Route::group(['prefix' => 'report-system'], function () {
            Route::group(['prefix' => 'report'], function () {
                Route::group(['prefix' => 'list'], function () {
                    Route::get('', [GroupsReportSystemReportListController::class,'index'])->name('groups.report-system.report.list');
                });
                Route::group(['prefix' => 'setting'], function () {
                    Route::get('', [GroupsReportSystemReportSettingController::class,'index'])->name('groups.report-system.report.setting');
                });
            });
        });
        
    });
});

Route::get('/quarterly-data', [PowerBIApiController::class, 'getQuarterlyData']);
