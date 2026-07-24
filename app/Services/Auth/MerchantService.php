<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use RuntimeException;

class MerchantService
{
    public function register($data)
    {
        DB::transaction(function () use ($data) {

            // Create User
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            // Assign Merchant Role
            $user->assignRole('merchant');

            // Create Store
            $user->store()->create([
                'name' => $data['store_name'],
                'slug' => Str::slug($data['store_name']),
                'description' => $data['description'],
            ]);

            // Create Merchant Profile
            $user->merchantProfile()->create([
                'business_type' => $data['business_type'],
                'tax_number' => $data['tax_number'],
                'commercial_registration' => $data['commercial_registration'],
            ]);

            if (! $user->hasRole('merchant')) {
                throw new RuntimeException('Failed to assign merchant role.');
            }

            $token = $user->createToken('merchant')->plainTextToken;

            return $user->load('store', 'merchantProfile');
        });
    }
}
