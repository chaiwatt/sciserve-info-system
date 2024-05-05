<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $superAdmin = User::find(1);
          $superAdminRole = Role::find(1);
          $superAdmin->roles()->attach($superAdminRole);

          $admin = User::find(2);
          $adminRole = Role::find(2);
          $admin->roles()->attach($adminRole);

          $officer = User::find(3);
          $officerRole = Role::find(3);
          $officer->roles()->attach($officerRole);
         
    }
}
