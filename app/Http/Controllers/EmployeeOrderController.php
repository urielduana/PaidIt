<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Item;
use App\Models\OrderItem;
use App\Models\User;
use Inertia\Inertia;

class EmployeeOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authenticated = auth()->user();
        $auth_business = $authenticated->user_Employee()->first()->Business_id;
        $auth_items = Item::where('Business_id', $auth_business)->get()->unique('id');

        $auth_order_items = [];
        foreach ($auth_items as $item) {
            $auth_order_items = array_merge(OrderItem::where('Item_id', $item->id)->get()->toArray(), $auth_order_items);
        }
        $auth_order_items = array_unique($auth_order_items, SORT_REGULAR);

        $auth_orders = [];
        foreach ($auth_order_items as $order_item) {
            $order = Order::where('id', $order_item['Order_id'])->first();
            if (!in_array($order, $auth_orders, true)) {
                $auth_orders[] = $order;
            }
        }

        $auth_customer_ids = array_unique(array_column($auth_orders, 'Customer_id'));

        $auth_users = User::whereIn('id', $auth_customer_ids)->get()->unique('id');


        return Inertia::render('Employee/Order/Index', [
            'items' => $auth_items,
            'order_items' => $auth_order_items,
            'orders' => $auth_orders,
            'users' => $auth_users,
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

    // New controller to display all the orders os a specific member

    public function showMemberOrders(string $nfc)
    {
        $nfc_auth = urldecode($nfc);
        $customer = Customer::where('nfc_auth', $nfc_auth)->with([
            'customer_User', // Datos del usuario
            'customer_Order.order_Order_Item.orderItem_Item', // Datos de la orden, ítems de la orden y datos de los ítems
        ])->first();
        if ($customer) {
            return Inertia::render('Employee/Order/MemberOrders', [
                'customer' => $customer,
            ]);
        } else {
            abort(404);
        }
    }
}
