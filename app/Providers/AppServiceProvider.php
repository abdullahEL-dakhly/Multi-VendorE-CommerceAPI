<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        ResetPassword::createUrlUsing(function (object $notifiable, string $token) {
            return config('app.frontend_url')."/password-reset/$token?email={$notifiable->getEmailForPasswordReset()}";
        });

        Response::macro('api', function (
            $msg = 'Success',
            $data = null,
            $status = 200,
            $token = null,
            array $extra = []
        ) {
            $response = [
                'status' => $status < 400 ? 'success' : 'error',
                'message' => $msg,
                'data' => $data,
                'token' => $token
            ];

            return response()->json(
                array_merge($response, $extra),
                $status
            );
        });
    }
}
