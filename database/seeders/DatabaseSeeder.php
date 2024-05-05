<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        $this->call(AccreditationTypesTableSeeder::class);
        $this->call(MainRolesTableSeeder::class);
        $this->call(HtmlColorsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RoleUsersTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(ModulesTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(GroupModuleMenusTableSeeder::class); 
        $this->call(MaterialPropertiesTableSeeder::class); 
        $this->call(AccreditationCriteriasTableSeeder::class); 
        $this->call(AccreditationExpertsTableSeeder::class); 
        $this->call(UnitTestsTableSeeder::class);
        
    }
}
