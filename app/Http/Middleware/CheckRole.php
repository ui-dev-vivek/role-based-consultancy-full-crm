<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $user = Auth::user();

        // Check user_type or individual roles
        if (in_array($user->user_type, $roles)) {
            return $next($request);
        }

        foreach ($user->roles as $role) {
            if (in_array($role->role_name, $roles)) {
                return $next($request);
            }
        }

        abort(403, 'Unauthorized action.');
    }
}
