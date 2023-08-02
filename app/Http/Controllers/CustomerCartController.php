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
            return Inertia::location(url())->with('error', 'No se encontró ningún carrito activo.');
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
        $cart->delete();
    
        // Redireccionar a la página de órdenes del cliente con un mensaje de éxito
        return Inertia::location(url()->previous());
        
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {   
        
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