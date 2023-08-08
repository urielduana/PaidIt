<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Business;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\CartItem;
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
        // Get the item id and quantity
        $itemId = $request->input('id');
        $quantity = $request->input('quantity');

        // Get the customer id
        $authId = auth()->user()->id;
        $customerId = Customer::where('User_id', $authId)->firstOrFail()->id;
        // Verify if the user has a cart
        try {
            $cartId = Cart::where('Customer_id', $customerId)->firstOrFail()->id;
        } catch (\Throwable $th) {
            dd("No cart found");
            $cart = new Cart();
            $cart->Customer_id = $customerId;
            $cart->save();
            $cartId = $cart->id;
        }

        // Verify if the item is already in the cart
        try {
            $cartItem = CartItem::where('Cart_id', $cartId)->where('Item_id', $itemId)->first();
            if ($cartItem) {
                $cartItem->quantity += $quantity;
                $cartItem->save();
                return redirect()->back()->with('success', 'Item added to cart');
            } else {
                $cartItem = new CartItem();
                $cartItem->Cart_id = $cartId;
                $cartItem->Item_id = $itemId;
                $cartItem->quantity = $quantity;
                $cartItem->save();
                // Return to the previous page reloading the page
                return redirect()->back()->with('success', 'New item added to cart');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error while adding item to cart');
        }
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
