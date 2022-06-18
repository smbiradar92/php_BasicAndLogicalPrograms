
<?php

include "Animal.php";

class Cat implements Animal
{
    public function makeSound()
    {
        echo "The cat Meows \n";
    }

    public function eat()
    {
        echo "The cat drink rat \n";
    }
}

$cat = new Cat();
$cat->makeSound();
$cat->eat();

?>