<?php

namespace App\Policies;

use App\Models\Coffee;
use App\Models\User;

class CoffeePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view-any Coffee');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Coffee $coffee): bool
    {
        return $user->can('view Coffee');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create Coffee');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Coffee $coffee): bool
    {
        return $user->can('update Coffee');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Coffee $coffee): bool
    {
        return $user->can('delete Coffee');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Coffee $coffee): bool
    {
        return $user->can('restore Coffee');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Coffee $coffee): bool
    {
        return $user->can('force-delete Coffee');
    }
}
