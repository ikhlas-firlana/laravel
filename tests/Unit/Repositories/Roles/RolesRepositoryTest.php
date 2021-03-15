<?php

namespace Tests\Unit\Repositories\Roles;

use App\Http\Repositories\Roles\RolesRepository;
use Tests\TestCase;

class RolesRepositoryTest extends TestCase {

    public $u;
    
    public function setUp(): void {
        parent::setUp();
        $this->createApplication(); 

        $this->u = new RolesRepository();
    }

}