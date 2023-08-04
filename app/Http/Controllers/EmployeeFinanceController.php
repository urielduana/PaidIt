<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Employee;
use App\Models\BusinessesTransaction;

class EmployeeFinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authenticated = auth()->user();
        $employee = $authenticated->user_Employee;
        $business = $employee->employee_Business;
        $transactions = BusinessesTransaction::where('business_id', $business->id)->get();


        // Count the number of employees in the business
        $totalEmployees = $business->business_Employee()->count();
        // Sum the salaries of all employees in the business
        // $totalSalaries = Employee::find($business->id)->employee_Business()->sum('salary');
        $totalSalaries = Employee::find($business->id)->sum('salary');

        // Sum the income registered in business_transactions
        $totalIncome = $transactions->where('name', 'income')->sum('mount');
        $totalExpenses = $transactions->where('name', 'expense')->sum('mount');

        $ganancias =  $totalIncome - $totalSalaries - $totalExpenses;

        return Inertia::render('Employee/Finance/EmployeeFinance',[
            "user" => $authenticated,
            "employee" => $employee,
            "business" => $business,
            "count" => $totalEmployees,
            "salario" => $totalSalaries,
            "income" => $totalIncome,
            "expenses" => $totalExpenses,
            "ganancias" => $ganancias,
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
