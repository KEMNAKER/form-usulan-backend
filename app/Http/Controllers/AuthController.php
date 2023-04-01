<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Contracts\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\LogoutRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\Auth\LoginResource;
use App\Http\Resources\Auth\RegisterResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Handle the user login action
     */
    public function login(LoginRequest $request): JsonResource
    {
        // get user by email
        $user = User::whereEmail($request->email)->first();

        // check if user is empty
        if (empty($user)) {
            abort(401, 'Credential not found');
        }

        // check if password is valid
        if (! Hash::check($request->password, $user->password)) {
            abort(401, 'Password mismatch');
        }

        // add the token to user
        $user->token = $user->createToken('token')->plainTextToken;

        // credential is valid
        return new LoginResource($user);
    }

    /**
     * Handle the user register action
     */
    public function register(RegisterRequest $request): JsonResource
    {
        // create the user
        $user = User::updateOrCreate([
            'email' => $request->email,
        ], [
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ]);

        return new RegisterResource($user);
    }

    /**
     * Handle the user logout action
     */
    public function logout(LogoutRequest $request): JsonResponse
    {
        // destroy user tokens
        $request->user()->tokens()->delete();

        return response()->json([
            'message' => 'You have logged out successfully',
        ]);
    }
}
