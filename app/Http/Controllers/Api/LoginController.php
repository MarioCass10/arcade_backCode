<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//cargamos el modelo de usuario y a la clase de autenficacion de Laravel
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $this->validateLogin($request);
        //Prueba 
        if (Auth::attempt($request->only('email','password'))) {
            return response()->json([
                'token' => $request->user()->createToken('token_acces')->plainTextToken,
                'message' => 'Success'
            ]);
        }

        return response()->json([
            'message' => 'Unauthenticated'
        ], 401);
    }

    public function validateLogin(Request $request)
    {
        return $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    }
}
