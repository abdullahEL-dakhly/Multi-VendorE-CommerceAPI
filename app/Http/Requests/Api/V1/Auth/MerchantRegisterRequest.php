<?php

namespace App\Http\Requests\Api\V1\Auth;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class MerchantRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            // User
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', 'min:8'],

            // Store
            'store_name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],

            // Merchant
            'business_type' => ['required', 'string'],

            'tax_number' => ['nullable', 'string'],

            'commercial_registration' => ['nullable', 'string'],
        ];
    }
}
