<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Auth;
use Validator;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());       
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
         ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        $response = [
            'meta' => [
                'code' => '201',
                'message' => 'Register has successfully'
            ],
            'data' => $user,
            'token' => $token,
            'token_type' => 'Bearer'
        ];

        return response()->json($response, 201);
    }

    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password')))
        {
            $response = [
                'meta' => [
                    'code' => '401',
                    'message' => 'Email or passwors is wrong'
                ]
            ];
            return response()->json($response, 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        $response = [
            'meta' => [
                'code' => '200',
                'message' => 'Login has successfully',
            ],
            'token' => $token,
            'token_type' => 'Bearer'
        ];
        return response()->json($response, 200);
    }

    // method for user logout and delete token
    public function logout()
    {
        auth()->user()->tokens()->delete();

        $response = [
            'meta' => [
                'code' => '200',
                'message' => 'You have successfully logged out and the token was successfully deleted'
            ]
        ];
        
        return response()->json($response, 200);
    }
}
