<?php

namespace App\Services;

use App\Models\Partner;
use App\Models\PartnerUser;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PartnerService
{
    /**
     * Create a new partner along with a primary user account.
     */
    public function createPartner(array $partnerData, array $userData)
    {
        return DB::transaction(function () use ($partnerData, $userData) {
            // 1. Create the User
            $user = User::create([
                'email' => $userData['email'],
                'password' => Hash::make($userData['password']),
                'user_type' => 'partner', // Force partner type
                'status' => 'active',
            ]);

            // 2. Create the Partner Entity
            $partner = Partner::create(array_merge($partnerData, [
                'created_by_user_id' => auth()->id(),
                'created_by_role' => auth()->user()->user_type === 'core' ? 'admin' : 'sales',
                'status' => 'active',
            ]));

            // 3. Assign 'Partner Owner' Role (from RBAC)
            $ownerRole = Role::where('role_name', 'Partner Owner')->firstOrFail();

            // Assign role to user globally (optional but good for login checks)
            $user->roles()->attach($ownerRole->id);

            // 4. Link User to Partner via PartnerUser table
            PartnerUser::create([
                'partner_id' => $partner->id,
                'user_id' => $user->id,
                'role_id' => $ownerRole->id,
                'status' => 'active',
            ]);

            // 5. Assign Partner Types
            if (!empty($partnerData['partner_types'])) {
                $partner->partnerTypes()->sync($partnerData['partner_types']);
            }

            return $partner;
        });
    }

    /**
     * Update partner details.
     */
    public function updatePartner(Partner $partner, array $data)
    {
        return DB::transaction(function () use ($partner, $data) {
            // Extract types before update if present to avoid fillable error or just process separately
            $types = $data['partner_types'] ?? null;
            unset($data['partner_types']);

            $partner->update($data);

            if ($types !== null) {
                $partner->partnerTypes()->sync($types);
            }

            return $partner;
        });
    }

    /**
     * Block/Delete partner.
     * Note: "Delete" might just be status change or soft delete.
     */
    public function deletePartner(Partner $partner)
    {
        // Core users can delete/block. Sales users generally shouldn't.
        // Logic handled in Component/Policy, here we just execute.
        return DB::transaction(function () use ($partner) {
            // Option 1: Hard delete
            // $partner->users()->delete(); // Depends on cascade
            // $partner->delete();

            // Option 2: Status Block (Safer)
            $partner->update(['status' => 'blocked']);
            // Also deactivate linked users?
            PartnerUser::where('partner_id', $partner->id)->update(['status' => 'inactive']);
        });
    }
}
