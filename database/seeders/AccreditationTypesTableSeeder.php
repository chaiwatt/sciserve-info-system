<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AccreditationTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('accreditation_types')->insert([
            [
                'name' => 'รับรองห้องฏิบัติการ',
            ],
            [
                'name' => 'บริการวิเคราะห์',
            ],
        ]);
    }
}
