<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Create all permissions
        $permissions = [
            // User Management
            ['code' => 'can_create_user', 'description' => 'Can create new users'],
            ['code' => 'can_update_user', 'description' => 'Can update user details'],
            ['code' => 'can_deactivate_user', 'description' => 'Can deactivate users'],
            ['code' => 'can_view_users', 'description' => 'Can view user list'],
            ['code' => 'can_assign_role', 'description' => 'Can assign roles to users'],
            ['code' => 'can_manage_permissions', 'description' => 'Can manage system permissions'],

            // Partner Management
            ['code' => 'can_create_partner', 'description' => 'Can create new partners'],
            ['code' => 'can_update_partner', 'description' => 'Can update partner details'],
            ['code' => 'can_view_partner', 'description' => 'Can view partner information'],
            ['code' => 'can_block_partner', 'description' => 'Can block/unblock partners'],
            ['code' => 'can_assign_partner_type', 'description' => 'Can assign partner types'],
            ['code' => 'can_manage_partner_users', 'description' => 'Can manage users within a partner'],

            // Partner User Management
            ['code' => 'can_create_partner_user', 'description' => 'Can create partner users'],
            ['code' => 'can_update_partner_user', 'description' => 'Can update partner user details'],
            ['code' => 'can_disable_partner_user', 'description' => 'Can disable partner users'],
            ['code' => 'can_view_partner_users', 'description' => 'Can view partner users'],

            // City Management
            ['code' => 'can_create_city', 'description' => 'Can create new cities'],
            ['code' => 'can_update_city', 'description' => 'Can update city details'],
            ['code' => 'can_activate_city', 'description' => 'Can activate/deactivate cities'],
            ['code' => 'can_manage_city_websites', 'description' => 'Can manage city websites'],
            ['code' => 'can_view_city', 'description' => 'Can view city information'],

            // Content Management
            ['code' => 'can_upload_ad', 'description' => 'Can upload advertisements'],
            ['code' => 'can_upload_data', 'description' => 'Can upload data content'],
            ['code' => 'can_upload_announcement', 'description' => 'Can upload government announcements'],
            ['code' => 'can_edit_own_content', 'description' => 'Can edit own uploaded content'],
            ['code' => 'can_delete_own_content', 'description' => 'Can delete own content'],
            ['code' => 'can_approve_content', 'description' => 'Can approve submitted content'],
            ['code' => 'can_publish_content', 'description' => 'Can publish approved content'],

            // Billing & Payments
            ['code' => 'can_view_billing', 'description' => 'Can view billing information'],
            ['code' => 'can_collect_payment', 'description' => 'Can collect payments'],
            ['code' => 'can_mark_payment_received', 'description' => 'Can mark payments as received'],
            ['code' => 'can_generate_invoice', 'description' => 'Can generate invoices'],
            ['code' => 'can_edit_invoice', 'description' => 'Can edit invoices'],
            ['code' => 'can_view_invoice', 'description' => 'Can view invoices'],

            // Reports & Analytics
            ['code' => 'can_view_reports', 'description' => 'Can view system reports'],
            ['code' => 'can_view_partner_performance', 'description' => 'Can view partner performance metrics'],
            ['code' => 'can_view_sales_performance', 'description' => 'Can view sales performance metrics'],
            ['code' => 'can_export_reports', 'description' => 'Can export reports'],

            // System & Audit
            ['code' => 'can_view_audit_logs', 'description' => 'Can view audit logs'],
            ['code' => 'can_view_activity_logs', 'description' => 'Can view activity logs'],
            ['code' => 'can_manage_system_settings', 'description' => 'Can manage system settings'],
        ];

        $createdPermissions = [];
        foreach ($permissions as $permission) {
            $createdPermissions[$permission['code']] = Permission::create($permission);
        }

        // Create Core Roles
        $adminRole = Role::create([
            'role_type' => 'core',
            'role_name' => 'Admin'
        ]);

        $analystRole = Role::create([
            'role_type' => 'core',
            'role_name' => 'Analyst'
        ]);

        // Create Sales Roles
        $salesExecutiveRole = Role::create([
            'role_type' => 'sales',
            'role_name' => 'Sales Executive'
        ]);

        // Create Partner Roles
        $partnerOwnerRole = Role::create([
            'role_type' => 'partner',
            'role_name' => 'Partner Owner'
        ]);

        $partnerManagerRole = Role::create([
            'role_type' => 'partner',
            'role_name' => 'Partner Manager'
        ]);

        $contentUploaderRole = Role::create([
            'role_type' => 'partner',
            'role_name' => 'Content Uploader'
        ]);

        // Assign permissions to Admin (Full Access)
        $adminRole->permissions()->attach([
            $createdPermissions['can_create_user']->id,
            $createdPermissions['can_update_user']->id,
            $createdPermissions['can_deactivate_user']->id,
            $createdPermissions['can_view_users']->id,
            $createdPermissions['can_assign_role']->id,
            $createdPermissions['can_manage_permissions']->id,
            $createdPermissions['can_create_partner']->id,
            $createdPermissions['can_update_partner']->id,
            $createdPermissions['can_view_partner']->id,
            $createdPermissions['can_block_partner']->id,
            $createdPermissions['can_assign_partner_type']->id,
            $createdPermissions['can_manage_partner_users']->id,
            $createdPermissions['can_create_city']->id,
            $createdPermissions['can_update_city']->id,
            $createdPermissions['can_activate_city']->id,
            $createdPermissions['can_manage_city_websites']->id,
            $createdPermissions['can_view_city']->id,
            $createdPermissions['can_approve_content']->id,
            $createdPermissions['can_publish_content']->id,
            $createdPermissions['can_view_billing']->id,
            $createdPermissions['can_generate_invoice']->id,
            $createdPermissions['can_edit_invoice']->id,
            $createdPermissions['can_view_invoice']->id,
            $createdPermissions['can_view_reports']->id,
            $createdPermissions['can_view_partner_performance']->id,
            $createdPermissions['can_view_sales_performance']->id,
            $createdPermissions['can_export_reports']->id,
            $createdPermissions['can_view_audit_logs']->id,
            $createdPermissions['can_view_activity_logs']->id,
            $createdPermissions['can_manage_system_settings']->id,
        ]);

        // Assign permissions to Analyst (Read-only)
        $analystRole->permissions()->attach([
            $createdPermissions['can_view_users']->id,
            $createdPermissions['can_view_partner']->id,
            $createdPermissions['can_view_city']->id,
            $createdPermissions['can_view_billing']->id,
            $createdPermissions['can_view_invoice']->id,
            $createdPermissions['can_view_reports']->id,
            $createdPermissions['can_view_partner_performance']->id,
            $createdPermissions['can_view_sales_performance']->id,
            $createdPermissions['can_export_reports']->id,
            $createdPermissions['can_view_activity_logs']->id,
        ]);

        // Assign permissions to Sales Executive
        $salesExecutiveRole->permissions()->attach([
            $createdPermissions['can_create_partner']->id,
            $createdPermissions['can_update_partner']->id,
            $createdPermissions['can_view_partner']->id,
            $createdPermissions['can_assign_partner_type']->id,
            $createdPermissions['can_create_partner_user']->id,
            $createdPermissions['can_view_partner_users']->id,
            $createdPermissions['can_view_city']->id,
            $createdPermissions['can_collect_payment']->id,
            $createdPermissions['can_mark_payment_received']->id,
            $createdPermissions['can_view_invoice']->id,
            $createdPermissions['can_view_sales_performance']->id,
        ]);

        // Assign permissions to Partner Owner (Full partner-level control)
        $partnerOwnerRole->permissions()->attach([
            $createdPermissions['can_view_partner']->id,
            $createdPermissions['can_create_partner_user']->id,
            $createdPermissions['can_update_partner_user']->id,
            $createdPermissions['can_disable_partner_user']->id,
            $createdPermissions['can_view_partner_users']->id,
            $createdPermissions['can_upload_ad']->id,
            $createdPermissions['can_upload_data']->id,
            $createdPermissions['can_upload_announcement']->id,
            $createdPermissions['can_edit_own_content']->id,
            $createdPermissions['can_delete_own_content']->id,
            $createdPermissions['can_view_city']->id,
            $createdPermissions['can_view_billing']->id,
            $createdPermissions['can_view_invoice']->id,
            $createdPermissions['can_view_partner_performance']->id,
        ]);

        // Assign permissions to Partner Manager (Content + team management)
        $partnerManagerRole->permissions()->attach([
            $createdPermissions['can_view_partner']->id,
            $createdPermissions['can_view_partner_users']->id,
            $createdPermissions['can_upload_ad']->id,
            $createdPermissions['can_upload_data']->id,
            $createdPermissions['can_upload_announcement']->id,
            $createdPermissions['can_edit_own_content']->id,
            $createdPermissions['can_delete_own_content']->id,
            $createdPermissions['can_view_city']->id,
            $createdPermissions['can_view_partner_performance']->id,
        ]);

        // Assign permissions to Content Uploader (Limited upload only)
        $contentUploaderRole->permissions()->attach([
            $createdPermissions['can_upload_ad']->id,
            $createdPermissions['can_upload_data']->id,
            $createdPermissions['can_upload_announcement']->id,
            $createdPermissions['can_edit_own_content']->id,
            $createdPermissions['can_view_city']->id,
        ]);

        $this->command->info('Roles and permissions created successfully!');
    }
}
