<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class Php84FeaturesTest extends TestCase
{
    public function testPropertyHook()
    {
        $user = new User('Иван', 'Иванов');
        $this->assertEquals('Иван Иванов', $user->fullName);

        $user->fullName = 'Петр Петров';
        $this->assertEquals('Петр', $user->firstName);
    }

    public function testArrayFind()
    {
        $habits = ['sport', 'sleep', 'water'];
        $found = array_find($habits, fn($h) => $h === 'water');
        $this->assertEquals('water', $found);
    }

    public function testJsonValidate()
    {
        $valid = '{"habit":"sport"}';
        $invalid = '{"habit":"sleep"';

        $this->assertTrue(json_validate($valid));
        $this->assertFalse(json_validate($invalid));
    }
}
