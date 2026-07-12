<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectToCompleteProfile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->is('portal*') && Auth::check()) {
            $user = Auth::user();

            // Check if profile is not complete
            if (!$user->is_profile_complete) {
                // Determine if we should allow this request to pass through
                $isCompleteProfilePage = $request->is('portal/complete-profile*') || 
                                         $request->routeIs('filament.portal.pages.complete-profile');
                
                $isLogout = $request->is('portal/logout*') || 
                            $request->routeIs('filament.portal.auth.logout');
                
                // Allow Livewire AJAX calls for state management inside the CompleteProfile component
                $isLivewire = $request->is('livewire/update*') || $request->hasHeader('X-Livewire');

                if (!$isCompleteProfilePage && !$isLogout && !$isLivewire) {
                    return redirect()->route('filament.portal.pages.complete-profile');
                }
            }
        }

        return $next($request);
    }
}
