<?php

abstract class Car
{
    public $name;

    public function __construct($name, $price)
    {             //constructor
        $this->name = $name;
        $this->price = $price;
    }

    abstract public function intro(): string;        //abstract method:can be called but cannot be implemented 

}

//child classes

class Tata extends Car
{

    public function intro(): string
    {                                 // calling abstract function from bstract class for implementation 
        return "An Indian owned company!!!. This is " . $this->name ."\nPrice of the Car is Rs." .$this->price ;

    }
}

class Volvo extends Car
{

    public function intro(): string
    {

        return "A Swedish company!!!!. This is " . $this->name."\nPrice of the Car is Rs." .$this->price;
    }
}

// $car = new Car("tata");              caling this method would give an error.
// echo $car -> intro();

//calling child classes
$tata = new Tata("Tata Nixon",250000);
echo $tata->intro() . "\n";

$volvo = new Volvo("Volvo Delight", 3000000);
echo $volvo->intro() . "\n";

?>