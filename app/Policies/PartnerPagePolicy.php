<?php

namespace App\Policies;

use App\Models\User;
use App\Models\PartnerPage;
use Illuminate\Auth\Access\HandlesAuthorization;

class PartnerPagePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the partnerPage can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list partnerpages');
    }

    /**
     * Determine whether the partnerPage can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PartnerPage  $model
     * @return mixed
     */
    public function view(User $user, PartnerPage $model)
    {
        return $user->hasPermissionTo('view partnerpages');
    }

    /**
     * Determine whether the partnerPage can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create partnerpages');
    }

    /**
     * Determine whether the partnerPage can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PartnerPage  $model
     * @return mixed
     */
    public function update(User $user, PartnerPage $model)
    {
        return $user->hasPermissionTo('update partnerpages');
    }

    /**
     * Determine whether the partnerPage can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PartnerPage  $model
     * @return mixed
     */
    public function delete(User $user, PartnerPage $model)
    {
        return $user->hasPermissionTo('delete partnerpages');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PartnerPage  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete partnerpages');
    }

    /**
     * Determine whether the partnerPage can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PartnerPage  $model
     * @return mixed
     */
    public function restore(User $user, PartnerPage $model)
    {
        return false;
    }

    /**
     * Determine whether the partnerPage can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PartnerPage  $model
     * @return mixed
     */
    public function forceDelete(User $user, PartnerPage $model)
    {
        return false;
    }
}
