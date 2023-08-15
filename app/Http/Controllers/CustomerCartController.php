<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\BusinessesTransaction;
use App\Models\CustomersTransaction;
use App\Models\Item;
class CustomerCartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authenticated = auth()->user();
        $customer = $authenticated->user_Customer;
        $cart = $customer->customer_Cart;
        $cartItems = $cart ? $cart->cart_CartItem : [];
        foreach ($cartItems as $key => $cartItem) {
            $items[$key]=$cartItem->cartItem_Item;
            $business[$key]=$items[$key]->item_Business;
            $cartItem->item=$items[$key];
            $cartItem->business=$business[$key];
        }
        $order= $customer->customer_Order;
        $orderItems= $order ? $order[0]->order_Order_Item : [];
        return Inertia::render('Customer/Cart/CustomerCart',[
            'user' => $customer,
            'cart' => $cart,
            'cartItems'=>$cartItems,
            'orderItems'=>$orderItems,
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
        $authenticated = auth()->user();
        $customer = $authenticated->user_Customer;
        $cart = $customer->customer_Cart;
        $cartItems= $cart ->cart_CartItem;
        if (!($cart)) {
            // Si no hay un carrito activo, redireccionar con un mensaje de error
            return Inertia::location(url());
        }else{

        // Crear una nueva orden y establecer el estado como "completado"
        $order = Order::create([
            'description' => 'Compra realizada', // Puedes agregar una descripción de la orden
            'Customer_id' => $cart->Customer_id,
        ]);
        // Mover los items del carrito a la tabla OrderItems y relacionarlos con la nueva Orden
        foreach ($cartItems as $item) {
            $orderItem = OrderItem::create([
                'quantity' => $item->quantity,
                'Order_id' => $order->id, // Relacionar el OrderItem con la nueva Orden
                'Item_id' => $item->Item_id,
                'Status_id' => 1,
            ]);
        }
        $this->createCustomerTransactions($order);
        $this->createBusinessesTransactions($order);
        // Eliminar el carrito ahora que la compra se ha completado
        //habilitar cuando ya se concrete el proyecto
        // $cart->delete();
    
        // Redireccionar a la página de órdenes del cliente con un mensaje de éxito
        return Inertia::location(url("/customer/orders"));
        
        }

    }
    public function updateQuantity($cartItemId)
    {   
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
        $authenticated = auth()->user();
        $customer = $authenticated->user_Customer;
        $cart = $customer->customer_Cart;
        
        // Obtén la nueva cantidad desde la solicitud
        $newQuantity = $request->input('quantity', 1);
    
        // Encuentra el cartItem por su ID
        $cartItem = $cart->cart_CartItem()->find($id);
    
        if ($cartItem) {
            // Asegura que la nueva cantidad no sea menor que 1
            $cartItem->quantity = max($newQuantity, 1);
            $cartItem->save();
        }
    
        // Utiliza Inertia::location para redirigir a la página anterior
        return Inertia::location(url()->previous());
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {   

        $authenticated = auth()->user();
        $customer = $authenticated->user_Customer;
        $cart = $customer->customer_Cart;
        // Encuentra el cartItem por su ID
        $cartItem = $cart->cart_CartItem()->find($id);
        $cartItem->delete();

        return Inertia::location(url()->previous());
        //falta implementar la eliminacion del item, checar porque no se tienen permisos
    }
    public function createCustomerTransactions($order){
        $orderItems= $order->order_Order_Item;
        $items=[];
        $total=0;
        foreach ($orderItems as $key => $orderItem) {
            $items[$key]=$orderItem->orderItem_Item;
            $total+=$items[$key]->price*$orderItem->quantity;
        }
        $transaction = CustomersTransaction::create([
            'name' => 'Compra realizada',
            'mount' => $total,
            'customer_id' => $order->Customer_id,
        ]);
    }

    public function createBusinessesTransactions($order) {
        // Obtener los order items del objeto $order
        $orderItems = $order->order_Order_Item;
    
        // Inicializar el array para almacenar los totales por negocio
        $businessTotals = [];
    
        // Calcular la sumatoria del precio por item y cantidad para cada negocio
        foreach ($orderItems as $orderItem) {
            $item = $orderItem->orderItem_Item;
            $businessId = $item->Business_id;
    
            // Verificar si ya existe un total para el Business_id actual
            if (!isset($businessTotals[$businessId])) {
                // Si no existe, inicializar el total para este negocio con el precio del primer item encontrado
                $businessTotals[$businessId] = $item->price * $orderItem->quantity;
            } else {
                // Si ya existe, simplemente sumar el precio del item actual multiplicado por su cantidad al total existente
                $businessTotals[$businessId] += $item->price * $orderItem->quantity;
            }
        }

        foreach ($businessTotals as $business_id=>$total) {
            $transaction = BusinessesTransaction::create([
                'name' => 'Venta realizada',
                'mount' => $total,
                'business_id' => $business_id,
            ]);
        }
    }
    
}