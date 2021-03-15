<?php

namespace App\Http\Repositories\Users;

use App\Http\Interfaces\Repositories\IUsersRepository;

class UsersRepository implements IUsersRepository{
    public $data = [[ "ID" => 1, "Name" => "abc", ], [ "ID" => 2, "Name" => "def", ]];

    public function __construct() {}

    public function GetUsers() {
        return $this->data;
    }

    public function FindUserById(int $id) {
        return array_filter($this->data, function ($val) use($id) {
            return $val['ID'] == $id;
        });
    }
}