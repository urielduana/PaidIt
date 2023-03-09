<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
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
        if ($user) {
            if ($user->can('view_customer')) {
                session(['view_role' => 'customer']);
            } else if ($user->can('view_employee')) {
                session(['view_role' => 'employee']);

            }
        }
        // session(['role' => 'hola']);

        return $next($request);
    }
}
