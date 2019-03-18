<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 18/03/2019
 * Time: 14:47
 */

class FactoryAnimal
{
    public function getAnimal($animal)
    {
        if ($animal == 'canine') {
            return new Dog();
        } else {
            return new Cat();
        }
    }
}