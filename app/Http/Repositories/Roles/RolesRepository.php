<?php

namespace App\Http\Repositories\Roles;

use App\Http\Interfaces\Repositories\IRolesRepository;

class RolesRepository implements IRolesRepository{

    private $lib = [
        ["ID" => 1, "role" => "public"],
        ["ID" => 1, "role" => "admin"],
        ["ID" => 2, "role" => "admin"],
    ];
    
    public function GetRoles() {
        return [
            "public",
            "admin",
        ];
    }

    public function FindById(number $int) {

        return;
    }
}