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
                if ($order->id === $item->Order_id) {
                    $order->orderItems->push($item);
                }
            }
        };

        return Inertia::render('Customer/Order/CustomerOrder', [
            'user' => $customer,
            'orders' => $orders,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Aquí simplemente devolvemos la vista del formulario para crear una nueva orden
        return Inertia::render('Customer/Order/CreateOrder');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos recibidos del formulario para crear una nueva orden
        $request->validate([
            'total' => 'required|numeric',
            'status' => 'required|string',
            // Otras validaciones que puedan ser necesarias para los campos de la orden
        ]);

        // Crear una nueva instancia del modelo Order y llenarla con los datos del formulario
        $order = new Order([
            'total' => $request->input('total'),
            'status' => $request->input('status'),
            'customer_id' => auth()->user()->user_Customer->id,
        ]);

        // Guardar el nuevo registro en la base de datos
        $order->save();

        // Redirigir a la lista de órdenes del cliente o mostrar un mensaje de éxito
        return redirect()->route('customer.orders.index')->with('success', 'La orden ha sido creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Obtener la orden específica y sus OrderItems relacionados
        $order = Order::findOrFail($id);
        $orderItems = OrderItem::where('order_id', $id)->get();

        // Devolver la vista que muestra los detalles de la orden y sus items
        return Inertia::render('Customer/Order/OrderDetails', [
            'order' => $order,
            'orderItems' => $orderItems,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Obtener la orden específica para editar
        $order = Order::findOrFail($id);

        // Devolver la vista del formulario de edición con los datos de la orden
        return Inertia::render('Customer/Order/EditOrder', [
            'order' => $order,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validar los datos recibidos del formulario para actualizar la orden
        $request->validate([
            'total' => 'required|numeric',
            'status' => 'required|string',
            // Otras validaciones que puedan ser necesarias para los campos de la orden
        ]);

        // Buscar la orden a actualizar por su ID
        $order = Order::findOrFail($id);

        // Actualizar los datos de la orden con los datos del formulario
        $order->total = $request->input('total');
        $order->status = $request->input('status');
        // Puedes actualizar otros campos de la orden aquí si los tienes en el formulario

        // Guardar los cambios en la base de datos
        $order->save();

        // Redirigir a la lista de órdenes del cliente o mostrar un mensaje de éxito
        return redirect()->route('customer.orders.index')->with('success', 'La orden ha sido actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Buscar la orden a eliminar por su ID
        $order = Order::findOrFail($id);

        // Eliminar la orden de la base de datos
        $order->delete();

        // Redirigir a la lista de órdenes del cliente o mostrar un mensaje de éxito
        return redirect()->route('customer.orders.index')->with('success', 'La orden ha sido eliminada exitosamente.');
    }
}