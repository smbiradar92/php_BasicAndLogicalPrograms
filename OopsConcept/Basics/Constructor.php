<?php

class Fruits {

    public $name;
    public $color;
    //creating constructor
function __construct($name, $color)         //parameterised constructor
{
    $this ->name = $name;
    $this ->color = $color;
}
//methods to get properties
function getName(){
    return $this -> name;
}

function getColor(){
    return $this -> color;
}

}

$Apple = new Fruits("Apple","red");       //calling constructor by using a object of class
echo $Apple -> getName();
echo "\n";
echo $Apple -> getColor();

?>