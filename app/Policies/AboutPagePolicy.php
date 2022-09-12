<?php

namespace App\Policies;

use App\Models\User;
use App\Models\AboutPage;
use Illuminate\Auth\Access\HandlesAuthorization;

class AboutPagePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the aboutPage can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list aboutpages');
    }

    /**
     * Determine whether the aboutPage can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\AboutPage  $model
     * @return mixed
     */
    public function view(User $user, AboutPage $model)
    {
        return $user->hasPermissionTo('view aboutpages');
    }

    /**
     * Determine whether the aboutPage can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create aboutpages');
    }

    /**
     * Determine whether the aboutPage can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\AboutPage  $model
     * @return mixed
     */
    public function update(User $user, AboutPage $model)
    {
        return $user->hasPermissionTo('update aboutpages');
    }

    /**
     * Determine whether the aboutPage can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\AboutPage  $model
     * @return mixed
     */
    public function delete(User $user, AboutPage $model)
    {
        return $user->hasPermissionTo('delete aboutpages');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\AboutPage  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete aboutpages');
    }

    /**
     * Determine whether the aboutPage can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\AboutPage  $model
     * @return mixed
     */
    public function restore(User $user, AboutPage $model)
    {
        return false;
    }

    /**
     * Determine whether the aboutPage can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\AboutPage  $model
     * @return mixed
     */
    public function forceDelete(User $user, AboutPage $model)
    {
        return false;
    }
}
