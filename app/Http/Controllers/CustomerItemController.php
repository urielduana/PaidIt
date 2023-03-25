<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Business;
use App\Models\Item;

class CustomerItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $items = Item::with('item_Item_Type', 'item_Business')->select()->get();
        $items = Item::with(['item_Item_Type:id,name', 'item_Business:id,name'])->select('id', 'name', 'price', 'description', 'image', 'stock', 'Business_id', 'Item_type_id')->get();

        return Inertia::render('Customer/Item/Index', [
            'items' => $items,
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
