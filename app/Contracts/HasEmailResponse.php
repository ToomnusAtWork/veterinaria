<?php

namespace App\Contracts;

use Laravel\Fortify\Fortify;
use App\Contracts\BaseResponse;

Class HasEmailResponse implements BaseResponse
{
    public function toResponse($request)
    {
        return $request->wantsJson()
            ? response()->json(["message"=> "Your email is already verified"], 200)
            : redirect()->intended(Fortify::redirects('email-verification'));
    }
}