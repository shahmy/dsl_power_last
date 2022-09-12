<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Testimonial;
use Illuminate\Auth\Access\HandlesAuthorization;

class TestimonialPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the testimonial can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->hasPermissionTo('list testimonials');
    }

    /**
     * Determine whether the testimonial can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Testimonial  $model
     * @return mixed
     */
    public function view(User $user, Testimonial $model)
    {
        return $user->hasPermissionTo('view testimonials');
    }

    /**
     * Determine whether the testimonial can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('create testimonials');
    }

    /**
     * Determine whether the testimonial can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Testimonial  $model
     * @return mixed
     */
    public function update(User $user, Testimonial $model)
    {
        return $user->hasPermissionTo('update testimonials');
    }

    /**
     * Determine whether the testimonial can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Testimonial  $model
     * @return mixed
     */
    public function delete(User $user, Testimonial $model)
    {
        return $user->hasPermissionTo('delete testimonials');
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Testimonial  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return $user->hasPermissionTo('delete testimonials');
    }

    /**
     * Determine whether the testimonial can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Testimonial  $model
     * @return mixed
     */
    public function restore(User $user, Testimonial $model)
    {
        return false;
    }

    /**
     * Determine whether the testimonial can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Testimonial  $model
     * @return mixed
     */
    public function forceDelete(User $user, Testimonial $model)
    {
        return false;
    }
}
