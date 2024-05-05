<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MainRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('main_roles')->insert([
            [
                'name' => 'Customer'
            ],
            [
                'name' => 'Officer'
            ],
            [
                'name' => 'Admin'
            ],
            [
                'name' => 'Super Admin'
            ] 
        ]);
    }
}
