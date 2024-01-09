<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrderPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->hasRole(ROLE_SELLER);
    }
}
