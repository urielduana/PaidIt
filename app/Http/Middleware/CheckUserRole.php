<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
{

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        $permissions = [
            'dashboard' => 'view_dashboard',
            'employee' => 'view_employee',
            'customer' => 'view_customer',
        ];
    
        foreach ($permissions as $route => $permission) {
            if ($request->routeIs($route) && !$user->can($permission)) {
                abort(403);
            }
        }
    
        return $next($request);
    }
}
