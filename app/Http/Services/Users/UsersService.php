<?php

namespace App\Http\Services\Users;

use App\Interfaces\Services\IUsersService;

use App\Repositories\Roles\RolesRepository;
use App\Repositories\Users\UsersRepository;

class UsersService implements IUsersService {
    public $users, $role;
    public function __construct(UsersRepository $u, RolesRepository $r) {
        $this->users = $u;
        $this->role = $r;
    }

    public function GetUserData(number $id) {
        $users = $this->users->FindUserById($id);

        foreach ($users as $row => $value) {
            $roles = $this->role->FindUserById($value['ID']);

            if(!isset($value['Roles']))
                $value['Roles'] = [];
            
            $value['Roles'] = array_merge($value['Roles'], $roles);
        }

        return $users;
    }
}