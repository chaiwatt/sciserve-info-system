<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create([
            'code' => 'ACCREDITATION-MENU-LIST',
            'name' => 'หน่วยตรวจสอบ',
            'route' => 'groups.accreditation-system.accreditation.list',    
            'view' => 'groups.accreditation-system.accreditation.list.index',
        ]);
        Menu::create([
            'code' => 'ACCREDITATION-MENU-ASSIGNMENT',
            'name' => 'การมอบหมาย',
            'route' => 'groups.accreditation-system.accreditation.assignment',    
            'view' => 'groups.accreditation-system.accreditation.assignment.index',
        ]);
        Menu::create([
            'code' => 'ACCREDITATION-MENU-SETTING-EXPERT',
            'name' => 'ผู้เชี่ยวชาญ',
            'route' => 'groups.accreditation-system.setting.expert',    
            'view' => 'groups.accreditation-system.setting.expert.index',
        ]);
        Menu::create([
            'code' => 'ACCREDITATION-MENU-SETTING-CRITERIA',
            'name' => 'การทดสอบ',
            'route' => 'groups.accreditation-system.setting.criteria',    
            'view' => 'groups.accreditation-system.setting.criteria.index',
        ]);
        Menu::create([
            'code' => 'ACCREDITATION-MENU-SETTING-GENERAL',
            'name' => 'ตั้งค่าทั่วไป',
            'route' => 'groups.accreditation-system.setting.general',    
            'view' => 'groups.accreditation-system.setting.general.index',
        ]);

        Menu::create([
            'code' => 'ANNOUNCEMENT-MENU-LIST',
            'name' => 'ประกาศ',
            'route' => 'groups.announcement-system.announcement.list',    
            'view' => 'groups.announcement-system.announcement.list.index',
        ]);
        Menu::create([
            'code' => 'ANNOUNCEMENT-MENU-SETTING',
            'name' => 'ตั้งค่า',
            'route' => 'groups.announcement-system.announcement.setting',    
            'view' => 'groups.announcement-system.announcement.setting.index',
        ]);

        Menu::create([
            'code' => 'REPORT-MENU-LIST',
            'name' => 'รายงาน',
            'route' => 'groups.report-system.report.list',    
            'view' => 'groups.report-system.report.list.index',
        ]);
        Menu::create([
            'code' => 'REPORT-MENU-SETTING',
            'name' => 'ตั้งค่า',
            'route' => 'groups.report-system.report.setting',    
            'view' => 'groups.report-system.report.setting.index',
        ]);
    }
}
