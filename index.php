<?php

require_once "Cat.php";
require_once "Dog.php";

$mincis = new Cat("Mincis");

$brincis = new Cat("Bruncis");

$Reksis = new Dog("Reksis", 6);

Cat::meow();

Dog::woof();


