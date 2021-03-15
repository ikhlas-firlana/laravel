<?php

namespace App\Http\Repositories\Roles;

use App\Http\Interfaces\Repositories\IRolesRepository;

class RolesRepository implements IRolesRepository{

    private $data = [
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

    public function FindById(number $id) {
        return array_filter($this->data, function ($value) use($id) {
            return $value['ID'] === $id;
        });
    }
}