<?php

namespace App\Filament\Portal\Pages\Auth;

use Filament\Auth\Pages\Register as BaseRegister;
use Illuminate\Database\Eloquent\Model;

class Register extends BaseRegister
{
    protected function handleRegistration(array $data): Model
    {
        $user = parent::handleRegistration($data);
        
        // Assign the default Spatie role 'public' immediately upon registration
        $user->assignRole('public');
        
        // Clear in-memory relation cache so Spatie/Filament fetches the role fresh on redirect
        $user->unsetRelation('roles');
        
        return $user;
    }
}
