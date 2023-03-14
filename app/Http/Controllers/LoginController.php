<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        $user = Auth::user();
        return Inertia::render('Dashboard', [
            'user' => $user
        ]);
    }

}
