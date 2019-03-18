<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 18/03/2019
 * Time: 15:35
 */
require "Animal.php";
require "Cat.php";
require "Dog.php";
require "FactoryAnimal.php";

$animalFactory = new FactoryAnimal();
$a1 = $animalFactory->getAnimal('feline');
echo "a1 sound: " . $a1->makeSound();
echo "<br>";

$a2 = $animalFactory->getAnimal('canine');
echo "a2 sound: " . $a2->makeSound();
