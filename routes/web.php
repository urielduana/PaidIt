<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\CustomerBusinessController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Ruta después de login

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
//     'CheckUserRole',
// ])->group(function () {
//     //Main Routes Dashboard | Employee | Customer
//  // Routes for /customer/
//  Route::prefix('/customer')->group(function () {
//     Route::resource('/', CustomerController::class)
//         ->names('customer')
//         ->parameters(['' => 'customer']);

//     Route::resource('/cart', CustomerCartController::class)
//         ->names('customer.cart')
//         ->parameters(['cart' => 'cart']);
// });

// // Routes for /dashboard/
// Route::prefix('/dashboard')->group(function () {
//     Route::resource('/', DashboardController::class)
//         ->names('dashboard')
//         ->parameters(['' => 'dashboard']);
// });

// // Routes for /employee/
// Route::prefix('/employee')->group(function () {
//     Route::resource('/', EmployeeController::class)
//         ->names('employee')
//         ->parameters(['' => 'employee']);
// });
// });

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
    });
});
