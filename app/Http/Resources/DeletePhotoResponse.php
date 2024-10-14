<?php

namespace App\Http\Resources;

use App\Contracts\BaseResponse;

class DeletePhotoResponse implements BaseResponse
{
    public function toResponse($request)
    {
        return $request->wantsJson()
            ? response()->json([
                "message"=> "Profile Photo deleted"], 200)
            : back()->with("status","profile photo deleted");
    }
}