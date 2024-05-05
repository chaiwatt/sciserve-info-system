<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Module::create([
            'prefix' => 'groups.accreditation-system.list',
            'code' => 'ACCREDITATION-LIST',
            'name' => 'หน่วยตรวจสอบ',
            'icon' => 'fa-clock'
        ]);
        Module::create([
            'prefix' => 'groups.accreditation-system.setting',
            'code' => 'ACCREDITATION-SETTING',
            'name' => 'การตั้งค่า',
            'icon' => 'fa-cog'
        ]);
        Module::create([
            'prefix' => 'groups.announcement-system.list',
            'code' => 'ANNOUNCEMENT-LIST',
            'name' => 'ประกาศ',
            'icon' => 'fa-clock'
        ]);
        Module::create([
            'prefix' => 'groups.announcement-system.setting',
            'code' => 'ANNOUNCEMENT-SETTING',
            'name' => 'การตั้งค่า',
            'icon' => 'fa-cog'
        ]);
        Module::create([
            'prefix' => 'groups.report-system.list',
            'code' => 'REPORT-LIST',
            'name' => 'รายงาน',
            'icon' => 'fa-clock'
        ]);
        Module::create([
            'prefix' => 'groups.report-system.setting',
            'code' => 'REPORT-SETTING',
            'name' => 'การตั้งค่า',
            'icon' => 'fa-cog'
        ]);
    }
}
