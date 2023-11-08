<?php

abstract class Animal
{
   protected $name;
   protected $age;

   function __construct($name, $age){
       $this->name = $name;
       $this->age = $age;
   }

   function birthday(){
       $this->age++;
   }
   abstract static function eat();

}