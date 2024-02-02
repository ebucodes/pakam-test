<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

// use Validator;

class AuthController extends Controller
{
    public $loginAfterSignUp = true;
    //
    public function register(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'first_name' => 'required|string|max:250',
            'last_name' => 'required|string|max:250',
            'username' => 'required|string|unique:users,username',
            'password' => 'required|string|min:8'
        ]);
        //
        if ($validate->fails()) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Validation Error!',
                'data' => $validate->errors(),
            ], 422);
        }

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        //
        $token = auth()->login($user);
        // $data['token'] = $user->createToken($request->username)->plainTextToken;
        $data['user'] = $user;

        // $response = [
        //     'status' => 'success',
        //     'message' => 'User is created successfully.',
        //     'data' => $data,
        // ];

        return $this->respondWithToken($token);
        // return response()->json($response, 201);
    }

    //
    // public function login(Request $request)
    // {
    //     $validate = Validator::make($request->all(), [
    //         'username' => 'required|string',
    //         'password' => 'required|string'
    //     ]);

    //     if ($validate->fails()) {
    //         return response()->json([
    //             'status' => 'failed',
    //             'message' => 'Validation Error!',
    //             'data' => $validate->errors(),
    //         ], 422);
    //     }

    //     // Check email exist
    //     $user = User::where('username', $request->username)->first();

    //     // Check password
    //     if (!$user || !Hash::check($request->password, $user->password)) {
    //         return response()->json([
    //             'status' => 'failed',
    //             'message' => 'Invalid credentials'
    //         ], 422);
    //     }

    //     $data['token'] = $user->createToken($request->username)->plainTextToken;
    //     $data['user'] = $user;

    //     $response = [
    //         'status' => 'success',
    //         'message' => 'User is logged in successfully.',
    //         'data' => $data,
    //     ];

    //     return response()->json($response, 200);
    // }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('username', 'password');
        $token = Auth::attempt($credentials);

        if (!$token) {
            return response()->json([
                'message' => 'Unauthorized',
            ], 422);
        }

        $user = Auth::user();
        return response()->json([
            'user' => $user,
            'authorization' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ]);
    }

    //
    public function getAuthUser(Request $request)
    {
        return response()->json(auth()->user());
    }

    public function logout()
    {
        Auth::logout();
        return response()->json([
            'message' => 'Successfully logged out',
        ]);
    }

    public function refresh()
    {
        return response()->json([
            'user' => Auth::user(),
            'authorisation' => [
                'token' => Auth::refresh(),
                'type' => 'bearer',
            ]
        ]);
    }
    //
    // protected function respondWithToken($token)
    // {
    //     return response()->json([
    //         'access_token' => $token,
    //         'token_type' => 'bearer',
    //         'expires_in' => auth()->factory()->getTTL() * 60
    //     ]);
    // }
}
