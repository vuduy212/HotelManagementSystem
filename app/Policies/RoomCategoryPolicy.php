<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RoomCategoryPolicy
{
    use HandlesAuthorization;

    public function index(User $user)
    {
        return $user->hasRole(['room_manager']);
    }

    public function view(User $user)
    {
        return $user->hasRole(['room_manager']);
    }

    public function create(User $user)
    {
        return $user->hasRole(['room_manager']);
    }

    public function update(User $user)
    {
        return $user->hasRole(['room_manager']);
    }

    public function delete(User $user)
    {
        return $user->hasRole(['room_manager']);
    }
}
