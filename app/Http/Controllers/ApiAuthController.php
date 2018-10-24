<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class ApiAuthController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string'
        ]);
        
        $credentials = $request->only('email', 'password');
        
        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json([
                    'error' => 'invalid_credentials'
                ], 401);
            }
        } catch (JWTException $e) {
            return response()->json([
                'error' => 'could_not_create_token'
            ], 500);
        }

        return response()->json([
            'token' => $token
        ], 200);
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email|max:255|unique:users',
            'name' => 'required|string|max:255',
            'password'=> 'required|min:8|confirmed',
            'password_confirmation' => 'required'
        ]);

        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
        ]);
        
        return response()->json([
            'token' => JWTAuth::fromUser($user)
        ], 201);
    }

    public function profile()
    {
        return response()->json([
            'user' => auth()->user()
        ], 200);
    }
}
