<?php 

namespace App\Contracts;

use Laravel\Fortify\Fortify;
use App\Contracts\BaseResponse;

class SendEmailResponse implements BaseResponse
{
    public function toResponse($request)
    {
        return $request->wantsJson()
            ? response()->json(["message"=> "Email verification send"], 200)
            : back()->with('status', Fortify::VERIFICATION_LINK_SENT);
    }
}