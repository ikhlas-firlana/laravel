<?php

namespace App\Http\Interfaces\Repositories;

interface IUsersRepository {

    public function __construct();

    public function GetUsers();

    public function FindUserById(int $id);
}

