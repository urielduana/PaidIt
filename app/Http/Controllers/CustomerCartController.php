<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
class CustomerCartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authenticated = auth()->user();
        $customer = $authenticated->user_Customer;

        // Accede a las órdenes relacionadas con el usuario autenticado
        $carts = Cart::where('customer_id', $customer->id)->get();
        $cartItems = CartItem::whereIn('cart_id', $carts->pluck('id'))->get();

        // Iterar sobre los carritos y asignar los Cart_Item correspondientes
        foreach ($carts as $cart) {
            $cart->cartItems= collect();
            foreach ($cartItems as $item) {
                if ($cart->id === $item->Cart_id  ) {

                    $cart->cartItems->push($item);
                }
            }
        }
        
        return Inertia::render('Customer/Cart/CustomerCart',[
            'user' => $customer,
            'carts' => $carts,
        ]);
    }
    
public function addToCart(Request $request)
{
    $productId = $request->input('product_id');
    $quantity = $request->input('quantity', 1); // Cantidad predeterminada es 1

    $authenticated = auth()->user();
    $customer = $authenticated->user_Customer;

    // Verificar si ya existe un carrito para el cliente
    $cart = $customer->cart_Customer;

    if (!$cart) {
        // Si no hay un carrito para el cliente, crear uno nuevo
        $cart = new Cart(['customer_id' => $customer->id]);
        $cart->save();
    }

    // Verificar si el item ya está en el carrito
    $existingCartItem = $cart->cart_Cart_Item()->where('item_id', $productId)->first();

    if ($existingCartItem) {
        // Si el item ya está en el carrito, actualizamos la cantidad
        $existingCartItem->quantity += $quantity;
        $existingCartItem->save();
    } else {
        // Si el item no está en el carrito, lo agregamos
        $item = Item::findOrFail($productId);
        $cartItem = new CartItem([
            'quantity' => $quantity,
            'item_id' => $item->id,
        ]);

        $cart->cart_Cart_Item()->save($cartItem);
    }

    // Redireccionar de vuelta a la página del carrito con un mensaje de éxito
    return to_route('carts.index')->with('success', 'Item agregado al carrito.');
}
    public function completePurchase(Request $request)
    {
        $authenticated = auth()->user();
        $customer = $authenticated->user_Customer;
    
        // Buscar el carrito activo del cliente actual
        $cart = Cart::where('customer_id', $customer->id)
                    ->first();
    
        if (!$cart) {
            // Si no hay un carrito activo, redireccionar con un mensaje de error
            return redirect()->route('carts.index')->with('error', 'No se encontró ningún carrito activo.');
        }
    
        // Crear una nueva orden y establecer el estado como "completado"
        $order = Order::create([
            'total' => $cart->total,
            'status' => 'completed', // Establecer el estado de la Orden como 'completada'
            'description' => 'Compra realizada', // Puedes agregar una descripción de la orden
            'customer_id' => $customer->id,
        ]);
    
        // Mover los items del carrito a la tabla OrderItems y relacionarlos con la nueva Orden
        foreach ($cart->cart_Cart_Item as $cartItem) {
            $orderItem = new OrderItem([
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->item->price,
                'total' => $cartItem->quantity * $cartItem->item->price,
                'status' => 'completed', // Puedes establecer el estado del OrderItem como 'completado'
                'order_id' => $order->id, // Relacionar el OrderItem con la nueva Orden
                'item_id' => $cartItem->item->id,
            ]);
    
            $orderItem->save();
        }
    
        // Eliminar el carrito ahora que la compra se ha completado
        $cart->delete();
    
        // Redireccionar a la página de órdenes del cliente con un mensaje de éxito
        return to_route('orders.index')->with('success', 'Compra completada.');
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