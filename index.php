<?php

require_once "Cat1.php";
require_once "Dog.php";

$dog = new Dog("Princess", 2);

$cat = new Cat1();

echo "<br>";

Dog::eat();

echo "<br>";

Cat1::eat();
