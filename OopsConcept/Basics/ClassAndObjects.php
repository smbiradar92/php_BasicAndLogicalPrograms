<?php

class Fruit{

    //Properties (variables/data members)
    public $name;
    public $color;

    //Methods(functions/member functions)
    function setName($name){                //set name
        $this -> name = $name;
    }

    function getName(){               //print name
       return $this -> name;
    }

    function setColor($color){
        $this -> color = $color;
    }

    function getColor(){
        return $this -> color;
    }
}
    // calling Objects
    $apple = new Fruit();
    $banana = new Fruit();

    $apple -> setName('Apple');             //Access methods
    $banana -> setName('Banana');
    $apple -> setColor('Red');
    $banana -> setColor('Yellow');

    echo $apple -> getName();               //print objects
    echo "\n";    //print object
    echo $banana -> getName();      //print object
    echo "\n";     
    echo "Apple color is ". $apple -> getColor();
    echo "\n";
    echo "Mango color is ".$banana -> getColor();
?>