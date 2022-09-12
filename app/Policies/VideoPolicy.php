<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Video;
use Illuminate\Auth\Access\HandlesAuthorization;

class VideoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the video can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list videos');
    }

    /**
     * Determine whether the video can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Video  $model
     * @return mixed
     */
    public function view(User $user, Video $model)
    {
        return $user->hasPermissionTo('view videos');
    }

    /**
     * Determine whether the video can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create videos');
    }

    /**
     * Determine whether the video can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Video  $model
     * @return mixed
     */
    public function update(User $user, Video $model)
    {
        return $user->hasPermissionTo('update videos');
    }

    /**
     * Determine whether the video can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Video  $model
     * @return mixed
     */
    public function delete(User $user, Video $model)
    {
        return $user->hasPermissionTo('delete videos');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Video  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete videos');
    }

    /**
     * Determine whether the video can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Video  $model
     * @return mixed
     */
    public function restore(User $user, Video $model)
    {
        return false;
    }

    /**
     * Determine whether the video can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Video  $model
     * @return mixed
     */
    public function forceDelete(User $user, Video $model)
    {
        return false;
    }
}
