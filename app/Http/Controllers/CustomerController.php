<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;



class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authenticated = auth()->user();
        $customer = $authenticated->user_Customer;
        return Inertia::render('Customer/Customer', [
            'user' => $authenticated,
            'customer' => $customer,
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
        // Obtén el usuario autenticado
        $authenticated = Auth::user();

        // Obtén el cliente asociado al usuario
        $customer = $authenticated->user_Customer;
        // Obtiene la cantidad ingresada en el formulario
        $cantidad = $request->input('cantidad');
        // Suma la cantidad ingresada a la cantidad actual del cliente
        $customer->balance += $cantidad;
        // Guarda los cambios en la base de datos
        $customer->update();
        // Redirecciona al usuario a la página anterior
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
