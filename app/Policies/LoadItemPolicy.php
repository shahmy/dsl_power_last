<?php

namespace App\Policies;

use App\Models\User;
use App\Models\LoadItem;
use Illuminate\Auth\Access\HandlesAuthorization;

class LoadItemPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the loadItem can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list loaditems');
    }

    /**
     * Determine whether the loadItem can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\LoadItem  $model
     * @return mixed
     */
    public function view(User $user, LoadItem $model)
    {
        return $user->hasPermissionTo('view loaditems');
    }

    /**
     * Determine whether the loadItem can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create loaditems');
    }

    /**
     * Determine whether the loadItem can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\LoadItem  $model
     * @return mixed
     */
    public function update(User $user, LoadItem $model)
    {
        return $user->hasPermissionTo('update loaditems');
    }

    /**
     * Determine whether the loadItem can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\LoadItem  $model
     * @return mixed
     */
    public function delete(User $user, LoadItem $model)
    {
        return $user->hasPermissionTo('delete loaditems');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\LoadItem  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete loaditems');
    }

    /**
     * Determine whether the loadItem can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\LoadItem  $model
     * @return mixed
     */
    public function restore(User $user, LoadItem $model)
    {
        return false;
    }

    /**
     * Determine whether the loadItem can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\LoadItem  $model
     * @return mixed
     */
    public function forceDelete(User $user, LoadItem $model)
    {
        return false;
    }
}
