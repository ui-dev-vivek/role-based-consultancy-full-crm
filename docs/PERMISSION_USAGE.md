# Dynamic Permission Management - Quick Reference

## How It Works

Your permission system is now **fully dynamic**. Permissions are checked against the database in real-time, so you can:

-   Add/remove permissions without code changes
-   Assign/revoke permissions to roles dynamically
-   Users get permissions through their assigned roles

---

## Usage Examples

### 1. In Routes (Middleware)

```php
// Single permission
Route::get('/users', [UserController::class, 'index'])
    ->middleware(['auth', 'permission:can_view_users']);

// Multiple permissions (OR logic)
Route::post('/content/upload', [ContentController::class, 'upload'])
    ->middleware(['auth', 'permission:can_upload_ad,can_upload_data']);

// Role-based
Route::middleware(['auth', 'role:core'])->group(function () {
    // Admin routes
});
```

### 2. In Controllers

```php
public function destroy(User $user)
{
    // Check permission
    if (!auth()->user()->hasPermission('can_deactivate_user')) {
        abort(403, 'Unauthorized');
    }

    $user->update(['status' => 'inactive']);
    return redirect()->back();
}

// Using policies (recommended)
public function update(Request $request, Partner $partner)
{
    $this->authorize('update', $partner);
    // Update logic
}
```

### 3. In Blade Views

```blade
@permission('can_create_user')
    <a href="{{ route('admin.users.create') }}">Add User</a>
@endpermission

@role('Admin')
    <div class="admin-panel">...</div>
@endrole

@anyPermission('can_upload_ad', 'can_upload_data')
    <button>Upload Content</button>
@endanyPermission
```

---

## Available Helper Methods

On `User` model:

-   `hasPermission('can_view_users')` - Check single permission
-   `hasAnyPermission(['can_upload_ad', 'can_upload_data'])` - Check if user has ANY
-   `hasAllPermissions(['can_create_user', 'can_update_user'])` - Check if user has ALL
-   `hasRole('Admin')` - Check role by name

---

## Managing Permissions Dynamically

### Assign Permissions to Role

```php
$role = Role::find($roleId);
$role->permissions()->sync($permissionIds); // Replace all
$role->permissions()->attach($permissionIds); // Add more
$role->permissions()->detach($permissionIds); // Remove
```

### Assign Roles to User

```php
$user = User::find($userId);
$user->roles()->sync($roleIds);
```

---

## What's Already Implemented

✅ Helper methods in User model
✅ Blade directives (@permission, @role, @anyPermission)
✅ CheckRole middleware
✅ CheckPermission middleware
✅ PartnerPolicy for model authorization
✅ 41 permissions seeded
✅ 6 roles with proper permissions

---

## Next: Update Your Controllers

Example for UserController:

```php
public function index()
{
    if (!auth()->user()->hasPermission('can_view_users')) {
        abort(403);
    }

    $users = User::with('roles')->latest()->paginate(15);
    return view('admin.users.index', compact('users'));
}
```

Or use middleware in routes:

```php
Route::resource('admin/users', UserController::class)
    ->middleware(['auth', 'permission:can_view_users']);
```
