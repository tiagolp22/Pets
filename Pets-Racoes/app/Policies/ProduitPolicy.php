<?php

namespace App\Policies;

use App\Models\Produit;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProduitPolicy
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
       return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Produit  $Produit
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Produit $produit)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->role == "admin";
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Produit $produit)
    {
        return $user->role == "admin";
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Produit $produit)
    {
        return $user->role == "admin";
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Produit $produit)
    {
        return $user->role == "admin";
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Produit $produit)
    {
        return $user->role == "admin";
    }
}
