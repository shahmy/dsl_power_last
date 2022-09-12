<?php

namespace App\Policies;

use App\Models\User;
use App\Models\ApplianceCategory;
use Illuminate\Auth\Access\HandlesAuthorization;

class ApplianceCategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the applianceCategory can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list appliancecategories');
    }

    /**
     * Determine whether the applianceCategory can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ApplianceCategory  $model
     * @return mixed
     */
    public function view(User $user, ApplianceCategory $model)
    {
        return $user->hasPermissionTo('view appliancecategories');
    }

    /**
     * Determine whether the applianceCategory can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create appliancecategories');
    }

    /**
     * Determine whether the applianceCategory can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ApplianceCategory  $model
     * @return mixed
     */
    public function update(User $user, ApplianceCategory $model)
    {
        return $user->hasPermissionTo('update appliancecategories');
    }

    /**
     * Determine whether the applianceCategory can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ApplianceCategory  $model
     * @return mixed
     */
    public function delete(User $user, ApplianceCategory $model)
    {
        return $user->hasPermissionTo('delete appliancecategories');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ApplianceCategory  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete appliancecategories');
    }

    /**
     * Determine whether the applianceCategory can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ApplianceCategory  $model
     * @return mixed
     */
    public function restore(User $user, ApplianceCategory $model)
    {
        return false;
    }

    /**
     * Determine whether the applianceCategory can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\ApplianceCategory  $model
     * @return mixed
     */
    public function forceDelete(User $user, ApplianceCategory $model)
    {
        return false;
    }
}
