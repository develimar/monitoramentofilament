<?php

namespace App\Policies;

use App\Models\TI\Acesso;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AcessoPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('Ver Acesso');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Acesso $acesso): bool
    {
        return $user->hasPermissionTo('Ver Acesso');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('Criar Acesso');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Acesso $acesso): bool
    {
        return $user->hasPermissionTo('Editar Acesso');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Acesso $acesso): bool
    {
        return $user->hasPermissionTo('Deletar Acesso');
    }

}
