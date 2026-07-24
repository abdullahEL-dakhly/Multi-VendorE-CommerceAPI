<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Auth\LoginRequest;
use App\Http\Resources\AuthenticatedTokenResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedTokenController extends Controller
{
    public function store(LoginRequest $request): JsonResponse
    {
        $request->authenticate();

        $user = Auth::user();

        if (! $user->hasVerifiedEmail()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Please verify your email address before logging in.',
            ], 403);
        }

        $token = $user->createToken('api')->plainTextToken;

        return response()->api(msg : 'Login successful', token: $token, data: new AuthenticatedTokenResource($user), status: 200);
    }

    public function destroy(Request $request): JsonResponse
    {
        $request->user()->currentAccessToken()->delete();

        return response()->api(msg : 'Logged out successfully', status: 204);
    }
}
