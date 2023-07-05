<?php

namespace App\Policies;

use App\Models\Birthday;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BirthdayPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Birthday  $birthday
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Birthday $birthday)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Birthday  $birthday
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Birthday $birthday)
    {
        //
        return $user->id === $birthday->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Birthday  $birthday
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Birthday $birthday)
    {
        //
       return $user->id === $birthday->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Birthday  $birthday
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Birthday $birthday)
    {
        //
        return $user->id === $birthday->user_id;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Birthday  $birthday
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Birthday $birthday)
    {
        //
       return $user->id === $birthday->user_id;
    }
}
