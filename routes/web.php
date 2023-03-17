<?php

use App\Http\Controllers\CustomerCartController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardUserController;

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
    //Main Routes Dashboard | Employee | Customer
 // Routes for /customer/
 Route::prefix('/customer')->group(function () {
    Route::resource('/', CustomerController::class)
        ->names('customer')
        ->parameters(['' => 'customer']);

    Route::resource('/cart', CustomerCartController::class)
        ->names('customer.cart')
        ->parameters(['cart' => 'cart']);
});

// Routes for /dashboard/
Route::prefix('/dashboard')->group(function () {
    Route::resource('/', DashboardController::class)
        ->names('dashboard')
        ->parameters(['' => 'dashboard']);
});

// Routes for /employee/
Route::prefix('/employee')->group(function () {
    Route::resource('/', EmployeeController::class)
        ->names('employee')
        ->parameters(['' => 'employee']);
});
});
