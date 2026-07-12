<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasName;
use Filament\Panel;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable implements FilamentUser, HasName
{
    use HasFactory, Notifiable, HasRoles {
        hasPermissionTo as protected spatieHasPermissionTo;
    }


    protected $fillable = [
        'name',
        'email',
        'password',
        'status',
        'is_email_verified',
        'is_profile_complete',
        'requested_role',
    ];

 
    public function getFilamentName(): string
    {
        try {
            $profileName = $this->profile?->full_name;
        } catch (\Throwable) {
            $profileName = null;
        }

        return $profileName ?? $this->name ?? $this->email;
    }

    /**
     * Determine if the user can access the Filament admin panel.
     */
    public function canAccessPanel(Panel $panel): bool
    {
        if ($this->status !== 'active') {
            return false;
        }

        if ($panel->getId() === 'admin') {
            return $this->hasRole('admin');
        }

        if ($panel->getId() === 'portal') {
            return $this->hasAnyRole(['public', 'student', 'teacher', 'expert']);
        }

        return false;
    }

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
            'is_profile_complete' => 'boolean',
        ];
    }

    /**
     * Get the user's profile.
     */
    public function profile(): HasOne
    {
        return $this->hasOne(UserProfile::class);
    }

    /**
     * Check if user has a specific permission.
     */
    public function hasPermission(string $permissionCode): bool
    {
        return $this->spatieHasPermissionTo($permissionCode);
    }

    /**
     * Check if user has any of the given permissions.
     */
    public function hasAnyPermission(array|string $permissions): bool
    {
        $permissions = is_array($permissions) ? $permissions : func_get_args();

        foreach ($permissions as $permission) {
            if ($this->spatieHasPermissionTo($permission)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Check if user has a specific role by name.
     */
    public function hasRole($roles, ?string $guard = null): bool
    {
        $roles = is_array($roles) ? $roles : [$roles];
        $userRoles = $this->getRoleNames()->map(fn (string $role): string => mb_strtolower(trim($role)));

        foreach ($roles as $role) {
            if (is_object($role) && method_exists($role, 'getAttribute')) {
                $role = $role->getAttribute('name');
            } elseif (is_object($role) && method_exists($role, '__toString')) {
                $role = (string) $role;
            }

            if ($role === null) {
                continue;
            }

            $normalizedRole = mb_strtolower(trim((string) $role));

            if ($userRoles->contains($normalizedRole)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Check if user has any of the given roles by name.
     */
    public function hasAnyRole(...$roles): bool
    {
        $roles = count($roles) === 1 && is_array($roles[0]) ? $roles[0] : $roles;

        return $this->hasRole($roles);
    }
}
