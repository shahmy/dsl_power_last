<?php

namespace App\Policies;

use App\Models\User;
use App\Models\ContactPage;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContactPagePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the contactPage can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list contactpages');
    }

    /**
     * Determine whether the contactPage can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ContactPage  $model
     * @return mixed
     */
    public function view(User $user, ContactPage $model)
    {
        return $user->hasPermissionTo('view contactpages');
    }

    /**
     * Determine whether the contactPage can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create contactpages');
    }

    /**
     * Determine whether the contactPage can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ContactPage  $model
     * @return mixed
     */
    public function update(User $user, ContactPage $model)
    {
        return $user->hasPermissionTo('update contactpages');
    }

    /**
     * Determine whether the contactPage can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ContactPage  $model
     * @return mixed
     */
    public function delete(User $user, ContactPage $model)
    {
        return $user->hasPermissionTo('delete contactpages');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ContactPage  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete contactpages');
    }

    /**
     * Determine whether the contactPage can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ContactPage  $model
     * @return mixed
     */
    public function restore(User $user, ContactPage $model)
    {
        return false;
    }

    /**
     * Determine whether the contactPage can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ContactPage  $model
     * @return mixed
     */
    public function forceDelete(User $user, ContactPage $model)
    {
        return false;
    }
}
