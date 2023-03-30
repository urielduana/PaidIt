<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Item;
use App\Models\Business;
use App\Models\ItemType;

class EmployeeItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authenticated = auth()->user();
        $businessAuth = $authenticated->user_Employee()->first()->Business_id;
        $businessId = Business::where('id', ($authenticated->user_Employee()->first()->Business_id))->first()->id;
        $items = Item::where('Business_id', $businessId)->get();

        foreach ($items as $item) {
            $type = $item->item_Item_Type->first()->name;
        }
        
        $item_types = ItemType::all();
        return Inertia::render('Employee/Item/Index', [
            'items' => $items,
            'item_types' => $item_types,
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
