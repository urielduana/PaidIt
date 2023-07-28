<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authenticated = auth()->user();
        $employee = $authenticated->user_Employee;
        $business = $employee->employee_Business;

        $getRoles = $authenticated->roles;

        $getPermisos = $authenticated->permissions;
        
        return Inertia::render('Employee/Employee', [
            'user' => $authenticated,
            'employee' => $employee,
            'business' => $business,
            'roles' => $getRoles
        ]);
        // return Inertia::render('Employee/Employee');
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
