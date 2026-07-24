<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Auth\CustomerRegisterRequest;
use App\Http\Resources\RegisteredUserResource;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use RuntimeException;

class CustomerRegisterController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function store(CustomerRegisterRequest $request): JsonResponse
    {
        $data = $request->validated();

        return DB::transaction(function () use ($data) {

            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            $user->assignRole('customer');


            if (! $user->hasRole('customer')) {
                throw new RuntimeException('Failed to assign customer role.');
            }

            event(new Registered($user));

            // $token = $user->createToken('api')->plainTextToken;

            return response()->api(
                msg: 'Customer registered successfully.',
                data: new RegisteredUserResource($user),
                extra: [
                    'Email_Verify' => false
                ],
            );
        });
    }
}
