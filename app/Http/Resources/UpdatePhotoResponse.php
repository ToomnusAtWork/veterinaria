<?php

namespace App\Http\Resources;

use App\Contracts\BaseResponse;

class UpdatePhotoResponse implements BaseResponse
{
    public function toResponse($request)
    {
        return $request->wantsJson()
            ? response()->json([
                "message"=> "Profile Photo Updated"], 200)
            : back()->with("status","profile photo updated");
    }
}