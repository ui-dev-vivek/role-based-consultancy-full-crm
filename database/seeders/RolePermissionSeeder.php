<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $roles = [
            'admin',
            'public',
            'student',
            'teacher',
            'expert',
        ];

        foreach ($roles as $role) {
            Role::firstOrCreate([
                'name' => $role,
                'guard_name' => 'web',
            ]);
        }

        $permissions = [
            'portal.access',
            'admin.access',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => 'web',
            ]);
        }

        Role::findByName('admin', 'web')->syncPermissions(['admin.access', 'portal.access']);
        Role::findByName('public', 'web')->syncPermissions(['portal.access']);
        Role::findByName('student', 'web')->syncPermissions(['portal.access']);
        Role::findByName('teacher', 'web')->syncPermissions(['portal.access']);
        Role::findByName('expert', 'web')->syncPermissions(['portal.access']);

        $this->command->info('Filament panel roles and permissions seeded successfully.');
    }
}
