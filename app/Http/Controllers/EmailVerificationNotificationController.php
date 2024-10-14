<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\HasEmailResponse;
use App\Contracts\SendEmailResponse;
use Laravel\Fortify\Http\Controllers\EmailVerificationNotificationController as BaseController;

class EmailVerificationNotificationController extends BaseController
{
    public function store(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return app(HasEmailResponse::class);
        }

        $request->user()->sendEmailVerificationNotification();

        return app(SendEmailResponse::class);
    }
}
