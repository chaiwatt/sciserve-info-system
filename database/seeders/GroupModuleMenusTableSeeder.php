<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Group;
use App\Models\Module;
use App\Models\GroupModuleMenu;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GroupModuleMenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Group
        $accreditationGroup = Group::where('code','ACCREDITATION')->first();
        $announcementGroup = Group::where('code','ANNOUNCEMENT')->first();
        $reportGroup = Group::where('code','REPORT')->first();

        //Module
        $accreditationListModule = Module::where('code','ACCREDITATION-LIST')->first();
        $accreditationSettingModule = Module::where('code','ACCREDITATION-SETTING')->first();
        $announcementListModule = Module::where('code','ANNOUNCEMENT-LIST')->first();
        $announcementSettingModule = Module::where('code','ANNOUNCEMENT-SETTING')->first();
        $reportListModule = Module::where('code','REPORT-LIST')->first();
        $reportSettingModule = Module::where('code','REPORT-SETTING')->first();

        //Menu
        $accreditationListMenu = Menu::where('code','ACCREDITATION-MENU-LIST')->first();
        $accreditationAssignmentMenu = Menu::where('code','ACCREDITATION-MENU-ASSIGNMENT')->first();
        $accreditationSettingUserMenu = Menu::where('code','ACCREDITATION-MENU-SETTING-EXPERT')->first();
        $accreditationSettingCriteriaMenu = Menu::where('code','ACCREDITATION-MENU-SETTING-CRITERIA')->first();
        $accreditationSettingGeneralMenu = Menu::where('code','ACCREDITATION-MENU-SETTING-GENERAL')->first();
        $announcementListMenu = Menu::where('code','ANNOUNCEMENT-MENU-LIST')->first();
        $announcementSettingMenu = Menu::where('code','ANNOUNCEMENT-MENU-SETTING')->first();
        $reportListMenu = Menu::where('code','REPORT-MENU-LIST')->first();
        $reportSettingMenu = Menu::where('code','REPORT-MENU-SETTING')->first();

        GroupModuleMenu::create([
            'group_id' => $accreditationGroup->id,
            'module_id' => $accreditationListModule->id,
            'menu_id' => $accreditationListMenu->id,
        ]);
        GroupModuleMenu::create([
            'group_id' => $accreditationGroup->id,
            'module_id' => $accreditationListModule->id,
            'menu_id' => $accreditationAssignmentMenu->id,
        ]);

        GroupModuleMenu::create([
            'group_id' => $accreditationGroup->id,
            'module_id' => $accreditationSettingModule->id,
            'menu_id' => $accreditationSettingUserMenu->id,
        ]);

        GroupModuleMenu::create([
            'group_id' => $accreditationGroup->id,
            'module_id' => $accreditationSettingModule->id,
            'menu_id' => $accreditationSettingCriteriaMenu->id,
        ]);

        GroupModuleMenu::create([
            'group_id' => $accreditationGroup->id,
            'module_id' => $accreditationSettingModule->id,
            'menu_id' => $accreditationSettingGeneralMenu->id,
        ]);

        GroupModuleMenu::create([
            'group_id' => $announcementGroup->id,
            'module_id' => $announcementListModule->id,
            'menu_id' => $announcementListMenu->id,
        ]);

        GroupModuleMenu::create([
            'group_id' => $announcementGroup->id,
            'module_id' => $announcementSettingModule->id,
            'menu_id' => $announcementSettingMenu->id,
        ]);

        GroupModuleMenu::create([
            'group_id' => $reportGroup->id,
            'module_id' => $reportListModule->id,
            'menu_id' => $reportListMenu->id,
        ]);

        GroupModuleMenu::create([
            'group_id' => $reportGroup->id,
            'module_id' => $reportSettingModule->id,
            'menu_id' => $reportSettingMenu->id,
        ]);

    }
}
