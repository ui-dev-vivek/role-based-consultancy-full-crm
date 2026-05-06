<?php

namespace App\Services;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserService
{
    /**
     * Create a new user with profile and roles
     *
     * @param array $userData
     * @param array $profileData
     * @param array $roles
     * @return User
     * @throws \Exception
     */
    public function createUserWithProfile(array $userData, array $profileData, array $roles = []): User
    {
        return DB::transaction(function () use ($userData, $profileData, $roles) {
            try {
                // 1. Create User
                $user = User::create([
                    'email' => $userData['email'],
                    'password' => Hash::make($userData['password']),
                    'user_type' => $userData['user_type'],
                    'status' => $userData['status'],
                ]);

                // 2. Create User Profile
                // Prepare profile data with user_id
                $profileData['user_id'] = $user->id;
                UserProfile::create($profileData);

                // 3. Assign Roles
                if (!empty($roles)) {
                    $user->roles()->attach($roles);
                }

                return $user;
            } catch (\Exception $e) {
                // Log the error for debugging
                Log::error('Error creating user with profile: ' . $e->getMessage());
                throw $e; // Re-throw to rollback transaction
            }
        });
    }

    /**
     * Update user with profile and roles
     *
     * @param User $user
     * @param array $userData
     * @param array $profileData
     * @param array $roles
     * @return User
     * @throws \Exception
     */
    public function updateUserWithProfile(User $user, array $userData, array $profileData, array $roles = []): User
    {
        return DB::transaction(function () use ($user, $userData, $profileData, $roles) {
            try {
                // 1. Update User
                $updateData = [
                    'email' => $userData['email'],
                    'user_type' => $userData['user_type'],
                    'status' => $userData['status'],
                ];

                if (!empty($userData['password'])) {
                    $updateData['password'] = Hash::make($userData['password']);
                }

                $user->update($updateData);

                // 2. Update User Profile
                $user->profile()->updateOrCreate(
                    ['user_id' => $user->id],
                    $profileData
                );

                // 3. Sync Roles
                if (isset($roles)) {
                    $user->roles()->sync($roles);
                }

                return $user;
            } catch (\Exception $e) {
                Log::error('Error updating user with profile: ' . $e->getMessage());
                throw $e;
            }
        });
    }

    /**
     * Delete user and related data
     *
     * @param User $user
     * @return bool
     * @throws \Exception
     */
    public function deleteUser(User $user): bool
    {
        return DB::transaction(function () use ($user) {
            try {
                // Roles and profile should be handled by foreign key constraints (cascade)
                // or we can manually delete them here if needed.
                // Assuming cascade delete is set up in migrations.

                return $user->delete();
            } catch (\Exception $e) {
                Log::error('Error deleting user: ' . $e->getMessage());
                throw $e;
            }
        });
    }
}
