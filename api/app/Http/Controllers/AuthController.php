<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;
use Validator;

class AuthController extends Controller
{
    //
    public function register(Request $request)
    {
        // $validate = Validator::make($request->all(), [
        //     'first_name' => 'bail|required|string|max:250',
        //     'last_name' => 'bail|required|string|max:250',
        //     'username' => 'bail|required|string|max:255|unique:users,username',
        //     'password' => 'bail|required|string|min:8'
        // ]);
        $validate = $request->validate([
            'first_name' => 'bail|required|string|max:250',
            'last_name' => 'bail|required|string|max:250',
            'username' => 'bail|required|string|max:255|unique:users,username',
            'password' => 'bail|required|string|min:8'
        ], [
            'first_name.required' => 'First Name is required',
            'last_name.required' => 'Last Name is required',
            'username.required' => 'Username is required',
            'username.unique' => 'Username is already taken',
            'password.min' => 'Password is supposed to be more than 8 characters long',
        ]);

        $user = User::create([
            'first_name' => $validate['first_name'],
            'last_name' => $validate['last_name'],
            'username' => $validate['username'],
            'password' => Hash::make($validate['password'])
        ]);

        // if ($validate->fails()) {
        //     return response()->json([
        //         'status' => 'failed',
        //         'message' => 'Validation Error!',
        //         'data' => $validate->errors(),
        //     ], 403);
        // }

        // $user = User::create([
        //     'first_name' => $request->first_name,
        //     'last_name' => $request->last_name,
        //     'username' => $request->username,
        //     'password' => Hash::make($request->password)
        // ]);

        $data['token'] = $user->createToken($request->username)->plainTextToken;
        $data['user'] = $user;

        $response = [
            'status' => 'success',
            'message' => 'User is created successfully.',
            'data' => $data,
        ];

        return response()->json($response, 201);
    }

    //
    public function login(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Validation Error!',
                'data' => $validate->errors(),
            ], 403);
        }

        // Check email exist
        $user = User::where('username', $request->username)->first();

        // Check password
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Invalid credentials'
            ], 401);
        }

        $data['token'] = $user->createToken($request->username)->plainTextToken;
        $data['user'] = $user;

        $response = [
            'status' => 'success',
            'message' => 'User is logged in successfully.',
            'data' => $data,
        ];

        return response()->json($response, 200);
    }

    //
    // public function logout(Request $request)
    // {
    //     auth()->user()->tokens()->delete();
    //     return response()->json([
    //         'status' => 'success',
    //         'message' => 'User is logged out successfully'
    //     ], 200);
    // }
}
