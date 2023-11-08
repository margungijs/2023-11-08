<?php

class Dog
{
    public $name;
    private $age;

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    function birthday(){
        $this->age++;
    }

    static function woof(){
        echo "woof";
    }
}