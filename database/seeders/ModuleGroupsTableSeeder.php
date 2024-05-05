<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Module;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ModuleGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accreditation = Group::where('code','ACCREDITATION')->first();
        $accreditationList = Module::where('code','ACCREDITATION-LIST')->first();
        $accreditationSetting = Module::where('code','ACCREDITATION-SETTING')->first();

        $accreditation->modules()->attach([
            $accreditationList->id, 
            $accreditationSetting->id
        ]);

        $announcement = Group::where('code','ANNOUNCEMENT')->first();
        $announcementList = Module::where('code','ANNOUNCEMENT-LIST')->first();
        $announcementSetting = Module::where('code','ANNOUNCEMENT-SETTING')->first();

        $announcement->modules()->attach([
            $announcementList->id, 
            $announcementSetting->id
        ]);

        $report = Group::where('code','REPORT')->first();
        $reportList = Module::where('code','REPORT-LIST')->first();
        $reportSetting = Module::where('code','REPORT-SETTING')->first();

        $report->modules()->attach([
            $reportList->id, 
            $reportSetting->id
        ]);
    }
}
