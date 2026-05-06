# Role & Permission Structure

I've created a comprehensive role and permission seeder based on your `role-per.txt` file and the `int.txt` architecture.

## Created Roles

### Core Roles (user_type: 'core')

1. **Admin** - Full system control
2. **Analyst** - Read-only analytics & reporting

### Sales Roles (user_type: 'sales')

3. **Sales Executive** - Partner onboarding & booking support

### Partner Roles (user_type: 'partner')

4. **Partner Owner** - Full partner-level control
5. **Partner Manager** - Content + team management
6. **Content Uploader** - Limited content upload only

## Permission Categories

### User Management (6 permissions)

-   `can_create_user`, `can_update_user`, `can_deactivate_user`
-   `can_view_users`, `can_assign_role`, `can_manage_permissions`

### Partner Management (6 permissions)

-   `can_create_partner`, `can_update_partner`, `can_view_partner`
-   `can_block_partner`, `can_assign_partner_type`, `can_manage_partner_users`

### Partner User Management (4 permissions)

-   `can_create_partner_user`, `can_update_partner_user`
-   `can_disable_partner_user`, `can_view_partner_users`

### City Management (5 permissions)

-   `can_create_city`, `can_update_city`, `can_activate_city`
-   `can_manage_city_websites`, `can_view_city`

### Content Management (7 permissions)

-   `can_upload_ad`, `can_upload_data`, `can_upload_announcement`
-   `can_edit_own_content`, `can_delete_own_content`
-   `can_approve_content`, `can_publish_content`

### Billing & Payments (6 permissions)

-   `can_view_billing`, `can_collect_payment`, `can_mark_payment_received`
-   `can_generate_invoice`, `can_edit_invoice`, `can_view_invoice`

### Reports & Analytics (4 permissions)

-   `can_view_reports`, `can_view_partner_performance`
-   `can_view_sales_performance`, `can_export_reports`

### System & Audit (3 permissions)

-   `can_view_audit_logs`, `can_view_activity_logs`, `can_manage_system_settings`

## Test Users Created

| Email                         | Password   | User Type | Role             |
| ----------------------------- | ---------- | --------- | ---------------- |
| `admin@example.com`           | `password` | core      | Admin            |
| `analyst@example.com`         | `password` | core      | Analyst          |
| `sales@example.com`           | `password` | sales     | Sales Executive  |
| `partner.owner@example.com`   | `password` | partner   | Partner Owner    |
| `partner.manager@example.com` | `password` | partner   | Partner Manager  |
| `uploader@example.com`        | `password` | partner   | Content Uploader |

## How to Use

Run the seeder:

```bash
php artisan migrate:fresh --seed
```

This will:

1. Create all 41 permissions
2. Create 6 roles with appropriate permissions
3. Create 6 test users (one for each role)

## Permission Assignment Logic

**Admin** gets almost everything (29 permissions) - full system control

**Analyst** gets read-only access (10 permissions) - reports and viewing only

**Sales Executive** gets partner management + payment collection (11 permissions)

**Partner Owner** gets full partner control (14 permissions) - can manage team and content

**Partner Manager** gets content + limited team view (9 permissions)

**Content Uploader** gets minimal upload access (5 permissions) - upload and edit own content only
