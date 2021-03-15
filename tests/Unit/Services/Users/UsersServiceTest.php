<?php

namespace Tests\Unit\Services\Users;

use App\Http\Repositories\Users\UsersRepository;
use App\Http\Repositories\Roles\RolesRepository;

use App\Http\Services\Users\UsersService;
use Tests\TestCase;

use Mockery;

class UsersServiceTest extends TestCase {
    public $u;
    public $users_repo;
    public $roles_repo;
    
    public function setUp(): void {
        parent::setUp();
        $this->createApplication(); 

    }

    /**
     * testGetUserData handle process unit test
     *
     * @return void
     */
    public function testGetUserData() {

        $this->users_repo = Mockery::mock(UsersRepository::class);

        $this->users_repo->shouldReceive('FindUserById')
            ->with(1)
            ->andReturn([["ID" => 1, "Name" => "xyz"]]);

        $this->roles_repo = Mockery::mock(RolesRepository::class);
        $this->roles_repo->shouldReceive('FindById')
            ->with(1)
            ->andReturn([["ID" => 1, "role" => "public"], ["ID" => 1, "role" => "admin"]]);

        $this->u = new UsersService($this->users_repo, $this->roles_repo);

        $result = $this->u->GetUserData(1);

        if (
            !\is_array($result) ||
            count($result) === 0 ||
            !isset($result[0]['Roles']) ||
            count($result[0]['Roles']) == 0
        ) {
            $this->assertTrue(false);
            return;
        }
        $this->assertTrue(true);

    }
}