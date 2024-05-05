<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AccreditationCriteriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('accreditation_criterias')->insert([
            [
                'name' => 'รายการทดสอบวัสดุ1',
            ],
            [
                'name' => 'รายการทดสอบวัสดุ2',
            ],
        ]);
    }
}
