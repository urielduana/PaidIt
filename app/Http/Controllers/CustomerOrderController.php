<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Order;
use App\Models\OrderItem;

class CustomerOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authenticated = auth()->user();
        $customer = $authenticated->user_Customer;

        // Accede a las órdenes relacionadas con el usuario autenticado
        $orders = Order::where('customer_id', $customer->id)->get();
        $orderItems = OrderItem::whereIn('order_id', $orders->pluck('id'))->get();

        // Iterar sobre las órdenes y asignar los Order_Item correspondientes
        foreach ($orders as $order) {
            $order->orderItems = collect();
            foreach ($orderItems as $item) {
                if ($order->id === $item->Order_id  ) {

                    $order->orderItems->push($item);
                }
            }
        }
        
        
        return Inertia::render('Customer/Order/CustomerOrder', [
            'user' => $customer,
            'orders' => $orders,
            'orderItems' => $orderItems,
        ]
        );
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