<?php

namespace App\Http\Repositories\Roles;

use App\Interfaces\Repositories\IUsersRepository;

class UsersRepository implements IUsersRepository{
    
    public function GetUsers() {
        return [
            [
                "ID" => 1,
                "Name" => "abc",
            ],
            [
                "ID" => 2,
                "Name" => "def",
            ],
        ];
    }
}