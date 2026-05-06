<?php

namespace App\Policies;

use App\Models\Partner;
use App\Models\User;

class PartnerPolicy
{
    /**
     * Determine if the user can view any partners.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermission('can_view_partner');
    }

    /**
     * Determine if the user can view the partner.
     */
    public function view(User $user, Partner $partner): bool
    {
        // Admin/Sales can view any partner
        if ($user->hasPermission('can_view_partner')) {
            return true;
        }

        // Partner users can only view their own partners
        return $user->partners->contains($partner->id);
    }

    /**
     * Determine if the user can create partners.
     */
    public function create(User $user): bool
    {
        return $user->hasPermission('can_create_partner');
    }

    /**
     * Determine if the user can update the partner.
     */
    public function update(User $user, Partner $partner): bool
    {
        // Admin or Sales can update any partner
        if ($user->hasPermission('can_update_partner')) {
            return true;
        }

        // Partner Owner can update their own partner
        if ($user->hasRole('Partner Owner') && $user->partners->contains($partner->id)) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the user can delete/block the partner.
     */
    public function delete(User $user, Partner $partner): bool
    {
        return $user->hasPermission('can_block_partner');
    }
}
