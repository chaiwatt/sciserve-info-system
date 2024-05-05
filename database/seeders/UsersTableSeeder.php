<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'is_admin' => 4,
                'name' => 'Super',
                'lastname' => 'Admin',
                'email' => 'super_admin@localhost',
                'password' => bcrypt('11111111'),
            ],
            [
                'is_admin' => 3,
                'name' => 'Admin',
                'lastname' => 'Admin',
                'email' => 'admin@localhost',
                'password' => bcrypt('11111111'),
            ],
            [
                'is_admin' => 2,
                'name' => 'Officer',
                'lastname' => 'One',
                'email' => 'officer_one@localhost',
                'password' => bcrypt('11111111'),
            ],
            [
                'is_admin' => 2,
                'name' => 'Officer',
                'lastname' => 'Two',
                'email' => 'officer_two@localhost',
                'password' => bcrypt('11111111'),
            ],
            [
                'is_admin' => 1,
                'name' => 'อาทิตย์',
                'lastname' => 'เฉิดฉาย',
                'email' => 'artit@localhost',
                'password' => bcrypt('11111111'),
            ],
            [
                'is_admin' => 1,
                'name' => 'จันทร์เพ็ญ',
                'lastname' => 'เดือนดารา',
                'email' => 'junpen@localhost',
                'password' => bcrypt('11111111'),
            ]
        ]);
    }
}
