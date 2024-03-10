<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthController extends Controller
{

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => "required",
            "password" => "required",
        ]);

    }
    public function login()
    {
        return Inertia::render('Auth/Login', [

        ]);
    }

    public function forgotPassword()
    {
        return Inertia::render('Auth/ResetPassword', [

        ]);
    }
}
