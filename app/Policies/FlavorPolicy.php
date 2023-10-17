<?php

namespace App\Policies;

use App\Models\Flavor;
use App\Models\User;

class FlavorPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view-any Flavor');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Flavor $flavor): bool
    {
        return $user->can('view Flavor');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create Flavor');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Flavor $flavor): bool
    {
        return $user->can('update Flavor');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Flavor $flavor): bool
    {
        return $user->can('delete Flavor');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Flavor $flavor): bool
    {
        return $user->can('restore Flavor');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Flavor $flavor): bool
    {
        return $user->can('force-delete Flavor');
    }
}
