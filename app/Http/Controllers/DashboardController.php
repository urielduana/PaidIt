<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->can('view_dashboard')) {
            return Inertia::render('Dashboard/Dashboard');
        } else if ($user->can('view_employee')) {
            return redirect()->route('employee');
        } else if ($user->can('view_customer')) {
            return redirect()->route('customer');
        } else {
            // Si el usuario no tiene ningún rol asignado, lo redirigimos a la vista de dashboard por defecto
            return Inertia::render('Dashboard/Dashboard', [
                // 'view_role' => session('view_role'),
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
