<?php

namespace App\Http\Services\Users;

use App\Http\Interfaces\Services\IUsersService;
// use App\Http\Interfaces\Services\IUsersService;

use App\Http\Repositories\Roles\RolesRepository;
use App\Http\Repositories\Users\UsersRepository;

class UsersService implements IUsersService {
    public $users, $role;
    public function __construct(UsersRepository $u, RolesRepository $r) {
        $this->users = $u;
        $this->role = $r;
    }

    public function GetUserData(int $id) {
        $users = $this->users->FindUserById($id);

        $tmp = [];
        foreach ($users as $row => $value) {
            $roles = $this->role->FindById($value['ID']);

            if(!isset($value['Roles']))
                $value['Roles'] = [];

            $tmp[] = array_merge(
                $value,
                ["Roles" => $roles],
            );

        }

        return $tmp;
    }
}