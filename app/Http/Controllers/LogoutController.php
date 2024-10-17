<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\StatefulGuard;
use Laravel\Fortify\Contracts\LogoutResponse;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

class LogoutController extends AuthenticatedSessionController
{
    protected $guard;

    public function __construct(StatefulGuard $guard)
    {
        $this->guard = $guard;
    }

    public function destroy(Request $request): LogoutResponse
    {
        if ($request->wantsJson()) {

            $request->user()->tokens()->delete();

            return app(LogoutResponse::class);
        } else {
            $this->guard->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return app(LogoutResponse::class);
        }
    }
}
