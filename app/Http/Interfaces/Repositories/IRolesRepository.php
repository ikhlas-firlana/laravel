<?php

namespace App\Http\Interfaces\Repositories;

interface IRolesRepository {

    public function __construct();

    public function GetRoles();

    public function FindById(int $id);
}
