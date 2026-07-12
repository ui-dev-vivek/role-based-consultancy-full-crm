<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AllRolesUserSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::updateOrCreate(
            ['email' => 'demo@example.com'],
            [
                'name' => 'Demo User',
                'password' => Hash::make('password'),
                'status' => 'active',
                'is_email_verified' => 'yes',
            ]
        );

        $roleNames = Role::query()
            ->where('guard_name', 'web')
            ->pluck('name')
            ->all();

        $user->syncRoles($roleNames);

        $this->command?->info('Demo user created and all roles assigned successfully.');
    }
}