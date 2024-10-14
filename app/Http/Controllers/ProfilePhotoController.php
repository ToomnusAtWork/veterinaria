<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfilePhotoRequest;
use App\Actions\Profile\UpdateProfilePhoto;
use App\Actions\Profile\DeleteProfilePhoto;
use App\Http\Resources\DeletePhotoResponse;
use App\Http\Resources\UpdatePhotoResponse;
use Illuminate\Http\Request;

class ProfilePhotoController extends Controller
{
    public function update(ProfilePhotoRequest $request, UpdateProfilePhoto $updater)
    {
        $updater->update($request->user(), $request->all());
        
        return app(UpdatePhotoResponse::class);
    }

    public function delete(Request $request, DeleteProfilePhoto $updater)
    {
        $updater->delete($request->user());

        return app(DeletePhotoResponse::class);
    }
}
