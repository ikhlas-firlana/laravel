<?php

namespace App\Http\Repositories\Roles;

use App\Http\Interfaces\Repositories\IRolesRepository;

class RolesRepository implements IRolesRepository{
    
    public function GetRoles() {
        return [
            "public",
            "admin",
        ];
    }
}