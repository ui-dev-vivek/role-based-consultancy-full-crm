<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {


        Role::create(['name' => 'public']);
        // Role::create(['name' => 'teacher']);
        // Role::create(['name' => 'student']);
        // Role::create(['name' => 'expert']);
        // Seed roles and permissions first
        // Seed roles and permissions first
        // $this->call([
        //     RolePermissionSeeder::class,
        //     // PartnerTypeSeeder::class,
        // ]);

        // Create test users for each role type

        // Admin User (Core)
        // $admin = User::create([
        //     'email' => 'admin@example.com',
        //     'password' => Hash::make('password'),
        //     // 'user_type' => 'admin',
        //     'status' => 'active',
        // ]);
        // $adminRole = Role::where('role_name', 'Admin')->first();
        // $admin->roles()->attach($adminRole->id);



        $this->command->info('Test users created successfully!');
    }
}
