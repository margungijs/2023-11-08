<?php

namespace gonnakms;
class Cat
{
    public $name;
    private $age;

    function __construct($name)
    {
        $this->name = $name;
        $this->age = 0;
    }

    function birthday()
    {
        $this->age++;
    }

    static function meow()
    {
        echo "meow";
    }
}