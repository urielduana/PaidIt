<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class CheckCustomerEmployee
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Inertia::share([
            'user' => function () {
                $user = Auth::user();
                if ($user) {
                    return [
                        'is_customer' => $user->is_customer,
                        'is_employee' => $user->is_employee,
                    ];
                }
                return null;
            }
        ]);
        return $next($request);
    }
}
