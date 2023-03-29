<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Inertia\Inertia;

class EmployeeMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $businessId = 1; 

        $employees = Employee::with([
            'employee_User:id,name,Gender_id',
            'employee_User.user_Gender:id,name',
            'employee_Business:id,name',
            'employee_User.roles:id,name',
            'employee_User.permissions:id,name',
        ])->where('business_id', $businessId)->get();

        foreach ($employees as $employee) {
            $user = $employee->employee_User;
            $business = $employee->employee_Business;
            $userGender = $user->user_Gender;
            $userRoles = $user->roles()->pluck('name', 'id');
            $userPermissions = $user->permissions()->pluck('name', 'id');
        }

        return Inertia::render('Employee/Member/Index', [
            'employees' => $employees,
        ]);
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
