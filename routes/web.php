<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\DashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Ruta después de login
//Dashboard
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
//     // 'CheckUserRole',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return Inertia::render('Dashboard', [
//             // 'view_role' => session('view_role'),
//         ]);
//     })->name('dashboard');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'CheckUserRole',
])->group(function () {


    Route::get('/customer', function () {
        // $userPermissions = auth()->user()->getAllPermissions()->pluck('name');
        return Inertia::render('Customer/Customer', [
            // 'view_role'=>Auth::user()->roles,
            // 'view_role' => $userPermissions,
        ]);
    })->name('customer');


    Route::get('/employee', function () {
        $userPermissions = auth()->user()->getAllPermissions()->pluck('name');
        return Inertia::render('Employee/Employee', [
            // 'view_role'=>(Auth::user()->roles),
            'view_role' => $userPermissions,

        ]);
    })->name('employee');
});

// Ruta después de login
//Customer
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
//     // 'CheckUserRole',
// ])->group(function () {
//     Route::get('/customer', function () {
//         return Inertia::render('Customer', [
//             // 'view_role' => session('view_role'),
//         ]);
//     })->name('cutomer');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
//     'CheckUserRole',
// ])->group(function () {
//     Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
// });







Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->resource('/user', UserController::class);
