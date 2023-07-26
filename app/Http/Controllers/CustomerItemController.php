<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Business;
use App\Models\Employee;
use App\Models\Item;

class CustomerItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $business = Business::with(['business_Item:id,name,price,description,stock,Business_id,Item_type_id', 'business_Item.item_Item_Type:id,name'])->select('id', 'name')->get();

        return Inertia::render('Customer/Item/Index', [
            'business' => $business,
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
