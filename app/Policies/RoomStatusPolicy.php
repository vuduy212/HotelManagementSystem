<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RoomStatusPolicy
{
    use HandlesAuthorization;

    public function index(User $user)
    {
        return $user->hasRole(['receptionist']);
    }

    public function view(User $user)
    {
        return $user->hasRole(['receptionist']);
    }

    public function create(User $user)
    {
        return $user->hasRole(['receptionist']);
    }

    public function update(User $user)
    {
        return $user->hasRole(['receptionist']);
    }

    public function delete(User $user)
    {
        return $user->hasRole(['receptionist']);
    }
}
