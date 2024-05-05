<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AccreditationExpertsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('accreditation_experts')->insert([
            [
                'name' => 'ผู้เชี่ยวชาญวัสดุศาสตร์',
            ],
            [
                'name' => 'ผู้เชี่ยวชาญสารเคมี',
            ],
        ]);
    }
}
