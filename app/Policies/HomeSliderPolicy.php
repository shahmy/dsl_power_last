<?php

namespace App\Policies;

use App\Models\User;
use App\Models\HomeSlider;
use Illuminate\Auth\Access\HandlesAuthorization;

class HomeSliderPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the homeSlider can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list homesliders');
    }

    /**
     * Determine whether the homeSlider can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\HomeSlider  $model
     * @return mixed
     */
    public function view(User $user, HomeSlider $model)
    {
        return $user->hasPermissionTo('view homesliders');
    }

    /**
     * Determine whether the homeSlider can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create homesliders');
    }

    /**
     * Determine whether the homeSlider can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\HomeSlider  $model
     * @return mixed
     */
    public function update(User $user, HomeSlider $model)
    {
        return $user->hasPermissionTo('update homesliders');
    }

    /**
     * Determine whether the homeSlider can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\HomeSlider  $model
     * @return mixed
     */
    public function delete(User $user, HomeSlider $model)
    {
        return $user->hasPermissionTo('delete homesliders');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\HomeSlider  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete homesliders');
    }

    /**
     * Determine whether the homeSlider can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\HomeSlider  $model
     * @return mixed
     */
    public function restore(User $user, HomeSlider $model)
    {
        return false;
    }

    /**
     * Determine whether the homeSlider can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\HomeSlider  $model
     * @return mixed
     */
    public function forceDelete(User $user, HomeSlider $model)
    {
        return false;
    }
}
