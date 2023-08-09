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
use App\Http\Controllers\DashboardItemController;
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
        ->names('customer.business');
        Route::resource('/items', CustomerItemController::class)
            ->names('customer.items');
        Route::resource('/orders', CustomerOrderController::class)
            ->names('orders');
        Route::resource('/carts', CustomerCartController::class)
            ->names('carts');
    });

    Route::prefix('employee')->group(function () {
        Route::resource('/', EmployeeController::class)
            ->names('employee');
        Route::resource('/members', EmployeeMemberController::class)
            ->names('employee.member');
        Route::resource('/items', EmployeeItemController::class)
            ->names('employee.items');
        Route::resource('/finance', EmployeeFinanceController::class)
            ->names('employee.finance');
        Route::resource('/settings', EmployeeSettingsController::class)
            ->names('employee.settings');
        Route::resource('/orders', EmployeeOrderController::class)
            ->names('employee.order');
    });

    Route::prefix('dashboard')->group(function () {
        Route::resource('/', DashboardController::class)
            ->names('dashboard');
        Route::resource('/items', DashboardItemController::class)
            ->names('dashboard.items');
    });
});