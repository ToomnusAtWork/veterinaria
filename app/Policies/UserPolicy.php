<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    const ADMIN = 'admin';
    const MODERATOR = 'moderator';


    public function admin(User $user)
    {
        return $user->isAdmin();
    }

    public function moderator(User $user)
    {
        return $user->isVeterinarian() || $user->isVetNurse() || 
            $user->isManager() || $user->isEmployee() || $user->isAdmin();
    }

}
