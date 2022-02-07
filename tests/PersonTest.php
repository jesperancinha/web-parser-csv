<?php

use PHPUnit\Framework\TestCase;


/**
 * @covers Calculator
 */
class PersonTest extends TestCase
{

    public function test__construct()
    {
        $person = new Person("id", "name", "surname");
        assert($person->personId == "id");
        assert($person->firstname == "name");
        assert($person->lastname == "surname");
        $this->assertEquals('id', $person->personId);

    }
}
