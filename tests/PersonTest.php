<?php

use PHPUnit\Framework\TestCase;


/**
 * @covers Person
 */
class PersonTest extends TestCase
{

    /**
     * @covers Person
     */
    public function test__construct()
    {
        $person = new Person("id", "name", "surname");
        assert($person->personId == "id");
        assert($person->firstname == "name");
        assert($person->lastname == "surname");
        $this->assertEquals('id', $person->personId);

    }
}
