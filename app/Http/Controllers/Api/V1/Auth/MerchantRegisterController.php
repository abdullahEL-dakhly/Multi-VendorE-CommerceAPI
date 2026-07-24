<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Auth\MerchantRegisterRequest;
use App\Services\Auth\MerchantService;
use RuntimeException;

class MerchantRegisterController extends Controller
{
    public function __construct(
        private MerchantService $merchantService
    ) {}

    public function register(MerchantRegisterRequest $request)
    {
        $user = $this->merchantService->register(
            $request->validated()
        );

        return response()->api(msg: 'Merchant registered successfully', data: $user, status: 201);
    }
}
