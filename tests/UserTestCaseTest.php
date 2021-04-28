<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\User;

class UserTestCaseTest extends TestCase
{
    public function testSomething(): void
    {
        $user = new User();

        $this->assertIsObject($user);
        $this->assertObjectHasAttribute('email', $user);
        $this->assertObjectHasAttribute('password', $user);
    }
}
