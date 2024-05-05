<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Group::create([
            'code' => 'ACCREDITATION',
            'name' => 'ระบบหน่วยตรวจสอบ',
            'description' => 'รายละเอียดระบบหน่วยตรวจสอบ',
            'icon' => '<span class="material-symbols-outlined" style="color: #175CD3; font-size: 36px;">schedule</span>',
            'dashboard' => 'groups.dashboard.accreditation-system',
            'default_route' => 'groups.accreditation-system.accreditation.list'
        ]);
        Group::create([
            'code' => 'ANNOUNCEMENT',
            'name' => 'ระบบข่าวประกาศ',
            'description' => 'รายละเอียดระบบข่าวประกาศ',
            'icon' => '<span class="material-symbols-outlined" style="color: #FE872B; font-size: 36px;">campaign</span>',
            'dashboard' => 'groups.dashboard.announcement-system',
            'default_route' => 'groups.announcement-system.announcement.list'
        ]);
        Group::create([
            'code' => 'REPORT',
            'name' => 'ระบบรายงานผู้บริหาร',
            'description' => 'รายละเอียดระบบรายงานผู้บริหาร',
            'icon' => '<span class="material-symbols-outlined" style="color: #DDB761; font-size: 36px;">finance_mode</span>',
            'dashboard' => 'groups.dashboard.report-system',
            'default_route' => 'groups.report-system.report.list'
        ]);
    }
}
