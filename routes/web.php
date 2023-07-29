<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\CustomerBusinessController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerItemController;
use App\Http\Controllers\CustomerOrderController;
use App\Http\Controllers\CustomerCartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeItemController;
use App\Http\Controllers\EmployeeMemberController;
use App\Http\Controllers\EmployeeFinanceController;
use App\Http\Controllers\EmployeeSettingsController;
use App\Http\Controllers\EmployeeOrderController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Ruta después de login
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'CheckUserRole',
])->group(function () {

    Route::prefix('customer')->group(function () {
        Route::resource('/', CustomerController::class)
            ->names('customer');
        Route::resource('/business', CustomerBusinessController::class)
            ->names('business');
        Route::resource('/item', CustomerItemController::class)
            ->names('items');
        Route::resource('/orders', CustomerOrderController::class)
            ->names('orders');
        Route::resource('/carts', CustomerCartController::class)
            ->names('carts');

        // Nuevas rutas para agregar elementos al carrito y completar la compra
        Route::post('/add-to-cart', [CustomerCartController::class, 'addToCart'])->name('customer.addToCart');
        Route::post('/complete-purchase', [CustomerCartController::class, 'completePurchase'])->name('customer.completePurchase');
    });

    Route::prefix('employee')->group(function () {
        Route::resource('/', EmployeeController::class)
            ->names('employee');
        Route::resource('/members', EmployeeMemberController::class)
            ->names('members');
        Route::resource('/items', EmployeeItemController::class)
            ->names('items');
        Route::resource('/finance', EmployeeFinanceController::class)
            ->names('finance');
        Route::resource('/settings', EmployeeSettingsController::class)
            ->names('settings');
        Route::resource('/orders', EmployeeOrderController::class)
            ->names('orders');
    });

    Route::prefix('dashboard')->group(function () {
        Route::resource('/', DashboardController::class)
            ->names('dashboard');
    });
});