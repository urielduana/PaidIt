<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Inertia\Inertia;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $user = Auth::user();

                if ($user->can('view_employee')) {
                    return redirect()->route('employee');
                } else if ($user->can('view_customer')) {
                    return redirect()->route('customer');
                } else {
                    // Si el usuario no tiene ningún rol asignado, lo redirigimos a la vista de dashboard por defecto
                    return Inertia::render('Dashboard', [
                        // 'view_role' => session('view_role'),
                    ]);
                }
            }
        }

        return $next($request);
    }
}
