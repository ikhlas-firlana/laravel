<?php

namespace App\Http\Repositories\Users;

use App\Http\Interfaces\Repositories\IUsersRepository;

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