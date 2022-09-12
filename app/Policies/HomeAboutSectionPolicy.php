<?php

namespace App\Policies;

use App\Models\User;
use App\Models\HomeAboutSection;
use Illuminate\Auth\Access\HandlesAuthorization;

class HomeAboutSectionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the homeAboutSection can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list homeaboutsections');
    }

    /**
     * Determine whether the homeAboutSection can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\HomeAboutSection  $model
     * @return mixed
     */
    public function view(User $user, HomeAboutSection $model)
    {
        return $user->hasPermissionTo('view homeaboutsections');
    }

    /**
     * Determine whether the homeAboutSection can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create homeaboutsections');
    }

    /**
     * Determine whether the homeAboutSection can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\HomeAboutSection  $model
     * @return mixed
     */
    public function update(User $user, HomeAboutSection $model)
    {
        return $user->hasPermissionTo('update homeaboutsections');
    }

    /**
     * Determine whether the homeAboutSection can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\HomeAboutSection  $model
     * @return mixed
     */
    public function delete(User $user, HomeAboutSection $model)
    {
        return $user->hasPermissionTo('delete homeaboutsections');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\HomeAboutSection  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete homeaboutsections');
    }

    /**
     * Determine whether the homeAboutSection can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\HomeAboutSection  $model
     * @return mixed
     */
    public function restore(User $user, HomeAboutSection $model)
    {
        return false;
    }

    /**
     * Determine whether the homeAboutSection can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\HomeAboutSection  $model
     * @return mixed
     */
    public function forceDelete(User $user, HomeAboutSection $model)
    {
        return false;
    }
}
