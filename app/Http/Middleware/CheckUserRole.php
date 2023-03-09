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

        if ($user) {
            if ($user->can('view_employee')) {
                if ($request->routeIs('customer')) {
                    abort(403);
                }
            } elseif ($user->can('view_customer')) {
                if ($request->routeIs('employee')) {
                    abort(403);
                }
            } 
            // else {
            //     if (!$request->routeIs('dashboard')) {
            //         abort(403);
            //     }
            // }
        }

        return $next($request);
    }
}
