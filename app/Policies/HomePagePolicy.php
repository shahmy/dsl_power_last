<?php

namespace App\Policies;

use App\Models\User;
use App\Models\HomePage;
use Illuminate\Auth\Access\HandlesAuthorization;

class HomePagePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the homePage can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list homepages');
    }

    /**
     * Determine whether the homePage can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\HomePage  $model
     * @return mixed
     */
    public function view(User $user, HomePage $model)
    {
        return $user->hasPermissionTo('view homepages');
    }

    /**
     * Determine whether the homePage can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create homepages');
    }

    /**
     * Determine whether the homePage can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\HomePage  $model
     * @return mixed
     */
    public function update(User $user, HomePage $model)
    {
        return $user->hasPermissionTo('update homepages');
    }

    /**
     * Determine whether the homePage can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\HomePage  $model
     * @return mixed
     */
    public function delete(User $user, HomePage $model)
    {
        return $user->hasPermissionTo('delete homepages');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\HomePage  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete homepages');
    }

    /**
     * Determine whether the homePage can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\HomePage  $model
     * @return mixed
     */
    public function restore(User $user, HomePage $model)
    {
        return false;
    }

    /**
     * Determine whether the homePage can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\HomePage  $model
     * @return mixed
     */
    public function forceDelete(User $user, HomePage $model)
    {
        return false;
    }
}
