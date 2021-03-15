<?php

namespace Tests\Unit\Repositories\Users;

use App\Http\Repositories\Users\UsersRepository;
use Tests\TestCase;

class UsersRepositoryTest extends TestCase {

    public $u;
    
    public function setUp(): void {
        parent::setUp();
        $this->createApplication(); 

        $this->u = new UsersRepository();
    }

    /**
     * testGetUsers handle process unit test
     *
     * @return void
     */
    public function testGetUsers() {

        $list = $this->u->GetUsers();

        if (!\is_array($list) || count($list) == 0) {
            $this->assertTrue(false);
            return;
        }
        $this->assertTrue(true);
    }

    /**
     * testFindUserById handle process unit test
     *
     * @return void
     */
    public function testFindUserById() {

        $item = $this->u->FindUserById(1);

        print_r($item);
        if (!\is_array($item) || count($item) === 0 || $item[0]['Name'] !== "abc") {
            $this->assertTrue(false);
            return;
        }
        $this->assertTrue(true);
    }

}