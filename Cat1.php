<?php

require_once "Animal.php";

class Cat1 extends Animal
{
    function __construct()
    {
        parent::__construct("Shadow", 5);
        echo "Puss in Boots";
    }

    static function eat(){
        echo "I likes whiskas";
    }
}