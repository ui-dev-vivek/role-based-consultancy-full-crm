<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'email',
        'password',
        'status',
        'is_email_verified',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    /**
     * Get the user's profile.
     */
    public function profile()
    {
        return $this->hasOne(UserProfile::class);
    }

    /**
     * The roles that belong to the user.
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_role_map', 'user_id', 'role_id')->withTimestamps();
    }

    /**
     * Helper to check if user has a specific role type.
     */
    public function hasRoleType(string $roleType): bool
    {
        return $this->roles()->where('role_type', $roleType)->exists();
    }

    /**
     * Check if user has a specific permission.
     */
    public function hasPermission(string $permissionCode): bool
    {
        return $this->roles()->whereHas('permissions', function ($query) use ($permissionCode) {
            $query->where('code', $permissionCode);
        })->exists();
    }

    /**
     * Check if user has any of the given permissions.
     */
    public function hasAnyPermission(array|string $permissions): bool
    {
        $permissions = is_array($permissions) ? $permissions : func_get_args();

        return $this->roles()->whereHas('permissions', function ($query) use ($permissions) {
            $query->whereIn('code', $permissions);
        })->exists();
    }

    /**
     * Check if user has a specific role by name.
     */
    public function hasRole(string $roleName): bool
    {
        return $this->roles()->where('role_name', $roleName)->exists();
    }

    /**
     * Check if user has any of the given roles by name.
     */
    public function hasAnyRole(array|string $roles): bool
    {
        $roles = is_array($roles) ? $roles : func_get_args();
        return $this->roles()->whereIn('role_name', $roles)->exists();
    }
}
