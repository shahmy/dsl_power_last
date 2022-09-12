<?php

namespace App\Policies;

use App\Models\User;
use App\Models\BlogPage;
use Illuminate\Auth\Access\HandlesAuthorization;

class BlogPagePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the blogPage can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list blogpages');
    }

    /**
     * Determine whether the blogPage can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\BlogPage  $model
     * @return mixed
     */
    public function view(User $user, BlogPage $model)
    {
        return $user->hasPermissionTo('view blogpages');
    }

    /**
     * Determine whether the blogPage can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create blogpages');
    }

    /**
     * Determine whether the blogPage can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\BlogPage  $model
     * @return mixed
     */
    public function update(User $user, BlogPage $model)
    {
        return $user->hasPermissionTo('update blogpages');
    }

    /**
     * Determine whether the blogPage can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\BlogPage  $model
     * @return mixed
     */
    public function delete(User $user, BlogPage $model)
    {
        return $user->hasPermissionTo('delete blogpages');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\BlogPage  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete blogpages');
    }

    /**
     * Determine whether the blogPage can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\BlogPage  $model
     * @return mixed
     */
    public function restore(User $user, BlogPage $model)
    {
        return false;
    }

    /**
     * Determine whether the blogPage can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\BlogPage  $model
     * @return mixed
     */
    public function forceDelete(User $user, BlogPage $model)
    {
        return false;
    }
}
