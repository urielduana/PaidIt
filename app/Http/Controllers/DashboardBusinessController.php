<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Business;
use App\Http\Requests\BusinessesRequest;

class DashboardBusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $Business = Business::all();
        return Inertia::render('Dashboard/Business/DashboardBusiness',
        
        ['Business' => $Business
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
    public function store(BusinessesRequest $req)
    {
        // Valida los datos recibidos del frontend (Vue.js)
        

        // Crea el registro en la base de datos
        $business = Business::create([
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
            'address' => $req->address,        ]);
        $business->save();
        return redirect()->back()->with('messege', 'Business created.');
        
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
