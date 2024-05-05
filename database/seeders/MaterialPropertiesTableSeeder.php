<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MaterialPropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('material_properties')->insert([
            [
                'name' => 'ความแข็ง',
            ],
            [
                'name' => 'การนำไฟฟ้า',
            ],
            [
                'name' => 'การยืดหยุ่น',
            ],
            [
                'name' => 'อนุภาคแม่เหล็ก',
            ],
            [
                'name' => 'การนำความร้อน',
            ],
            [
                'name' => 'การแผ่รังสี',
            ],
        ]);
    }
}
