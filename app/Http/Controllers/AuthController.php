<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request) {
	    $validator = Validator::make($request->all(), [
	        'role' => 'required|string|in:admin,user|between:2,50|unique:users',
	        'first_name' => 'required|string|between:2,100',
	        'last_name' => 'required|string|between:2,100',
	        'email' => 'required|string|email|max:100|unique:users',
	        'password' => 'required|string|confirmed|min:6',
	    ]);

	    if($validator->fails()){
	        return response()->json($validator->errors(), 400);
	    }

	    $user = User::create(array_merge($validator->validated()));

	    return response()->json([
	        'user' => $user,
	        'message' => 'New user have been registered successfully.'
	    ], 201);
	}

	protected function respondWithToken($token) {
	    return response()->json([
	        'token' => $token,
	        'token_type' => 'bearer',
	        'expires_in' => auth()->factory()->getTTL() * 24 * 60,
	        'user' => auth()->user()
	    ]);
	}


	public function login(Request $request) {
		$validator = Validator::make($request->all(), [
	        'email' => 'required|email',
	        'password' => 'required|string|min:6',
	    ]);

	    if ($validator->fails()) {
	        return response()->json($validator->errors(), 422);
	    }

	    if (! $token = auth()->attempt($validator->validated())) {
	        return response()->json(['error' => 'Either email or password is wrong.'], 401);
	    }
	    return $this->respondWithToken($token);
	}


	public function logout(Request $request) {
		
		if (! auth()->user()) {
            return response()->json([
                'token' => 'Invalid',
            ], 422);
        }
		
	    auth()->logout();
	    return response()->json(['message' => 'User logged out successfully.']);
	}


	public function profile(Request $request) {

		if (! auth()->user()) {
            return response()->json([
                'token' => 'Invalid',
            ], 422);
        }

		if (request()->isMethod('put')) {
			$user = auth()->user();
			$user->first_name = request('first_name') ?? $user->first_name;
			$user->last_name = request('last_name') ?? $user->last_name;
			$user->save();
	    	return response()->json(['message' => 'User profile updated successfully.']);
		}
	    return response()->json(auth()->user());
	}


	public function users() {
		if (auth()->user()['role'] ==  'admin') {
	    	return response()->json(['users' => User::whereRole('user')->get()]);
		}
		return response()->json(['message' => 'Unauthorized.'], 404);
	}
}
