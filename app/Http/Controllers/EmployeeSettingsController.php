<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;

class EmployeeSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authenticated = auth()->user();
        $employee = $authenticated->user_Employee;
        $bussines = $employee->employee_Business;


        return Inertia::render('Employee/Settings/Index',[
            'bussines' => $bussines
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
        //OBtengo el usuario autenticado
        $authenticated = Auth::user();
        //Obtengo el empleado asociado al usuario
        $employee = $authenticated->user_Employee;
        //Obtenr el negocio asociado al empleado
        $bussines = $employee->employee_Business;

        //Obtengo los datos del formulario y los guardo en la base de datos
        $name = $request->input('name');
        $bussines->name = $name;
        $email = $request->input('email');
        $bussines->email = $email;
        $phone = $request->input('phone');
        $bussines->phone = $phone;
        $address = $request->input('address');
        $bussines->address = $address;

        //Guardo los cambios
        $bussines->update();
        return Inertia::location(url()->previous());
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
