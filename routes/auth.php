<?php

use App\Http\Controllers\Api\V1\Auth\AuthenticatedTokenController;
use App\Http\Controllers\Api\V1\Auth\CustomerRegisterController;
use App\Http\Controllers\Api\V1\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Api\V1\Auth\MerchantRegisterController;
use App\Http\Controllers\Api\V1\Auth\NewPasswordController;
use App\Http\Controllers\Api\V1\Auth\PasswordResetLinkController;
use App\Http\Controllers\Api\V1\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {

    Route::post('/customer/register', [CustomerRegisterController::class, 'store'])
        ->name('register');

    Route::post(
        '/merchant/register',
        [MerchantRegisterController::class, 'register']
    );

    Route::post('/login', [AuthenticatedTokenController::class, 'store'])
        ->name('login');

    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::post('/reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');

});

Route::middleware(['throttle:6,1', 'auth:sanctum'])->group(function () {

    Route::get('/verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware('signed')
        ->name('verification.verify')->withoutMiddleware('auth:sanctum');

    Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->name('verification.send');

    Route::post('/logout', [AuthenticatedTokenController::class, 'destroy'])
        ->name('logout');

});
