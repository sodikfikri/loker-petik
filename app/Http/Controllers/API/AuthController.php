<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Auth;
use Validator;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Alumni;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'phone' => 'required|numeric',
            'address' => 'required',
            'period' => 'required|numeric',
            'cv' => 'required|mimes:png,jpg,jpeg,pdf'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());       
        }

        if ($request->type == 2) {
            if ($file = $request->file('cv')) {
                $name = time() . '.' . $file->getClientOriginalName(); // file name

                $moveTo = 'files';
                $file->move($moveTo, $name);

                $insertGetId = Alumni::insertGetId(
                    [
                        'name' => $request->name,
                        'email' => $request->email,
                        'phone' => $request->phone,
                        'address' => $request->address,
                        'period' => $request->period,
                        'period' => $request->period,
                        'cv' => $name,
                        'created_at' => Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s')
                    ]
                );
            }
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'alumni_id' => $request->type == 1 ? null : $insertGetId,
            'type' => $request->type
         ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        $response = [
            'meta' => [
                'code' => '201',
                'message' => 'Register has successfully'
            ],
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
            'data' => $user->type == 1 ? $user : Alumni::where('id', $user->alumni_id)->first(),
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
