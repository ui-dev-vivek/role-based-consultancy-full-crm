<?php

namespace App\Filament\Portal\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use Illuminate\Support\Facades\Auth;

class Dashboard extends BaseDashboard
{
    /**
     * Get the dynamic title of the dashboard based on the user's role.
     */
    public function getTitle(): string
    {
        $user = Auth::user();

        if ($user) {
             if ($user->hasRole('admin')) {
                return 'Admin Dashboard';
            }
            if ($user->hasRole('expert')) {
                return 'Expert Dashboard';
            }
            if ($user->hasRole('teacher')) {
                return 'Teacher Dashboard';
            }
           
            if ($user->hasRole('student')) {
                return 'Student Dashboard';
            }
            if ($user->hasRole('public')) {
                return 'Public Dashboard';
            }
          
        }

        return 'Dashboard';
    }
}
