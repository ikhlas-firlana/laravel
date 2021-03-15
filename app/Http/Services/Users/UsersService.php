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
        return;
    }
}