<?php

interface Animal
{
    public function makeSound();
    public function eat();

}

class Dog implements Animal
{
    public function makeSound()
    {
        echo "The dog Barks\n";
    }

    public function eat(){
        echo "The Dog eats pedigree";
    }
}

$animal = new Dog();
$animal->makeSound();

?>