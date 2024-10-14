<?php

namespace App\Actions\Profile;

use App\Contracts\DeleteUserPhoto;
use App\Models\User;

class DeleteProfilePhoto implements DeleteUserPhoto
{
    public function delete(User $user): void
    {
        $user->deleteProfilePhoto();
    }
}