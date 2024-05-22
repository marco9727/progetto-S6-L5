<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Project;

class ProjectPolicy
{
    public function create(User $user)
    {
        // In questo esempio, tutti gli utenti autenticati possono creare progetti
        return true;
    }
}
