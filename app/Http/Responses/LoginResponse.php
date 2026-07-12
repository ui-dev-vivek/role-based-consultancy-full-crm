<?php

namespace App\Http\Responses;

use Filament\Auth\Http\Responses\Contracts\LoginResponse as Responsable;
use Filament\Facades\Filament;
use Illuminate\Http\RedirectResponse;
use Livewire\Features\SupportRedirects\Redirector;
use Illuminate\Support\Facades\Auth;

class LoginResponse implements Responsable
{
    public function toResponse($request): RedirectResponse | Redirector
    {
        $user = Auth::user();

        // Clear intended URL to avoid redirecting non-admins to /admin panel 
        session()->forget('url.intended');

        // Admin users go to the Admin panel
        if ($user && $user->hasRole('admin')) {
            return redirect()->to(Filament::getPanel('admin')->getUrl());
        }

        // Everyone else goes to the Portal panel
        return redirect()->to(Filament::getPanel('portal')->getUrl());
    }
}
