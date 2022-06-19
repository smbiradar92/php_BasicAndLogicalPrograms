<?php

class Fruit{
    protected $name = "Apple";          //using protected variable

    public function getName(){         //calling getter
        return $this->name;
    }
}

class FruitName extends Fruit{      //derived class
    public function print(){
        return $this->name;         // calling method from main class
    }
}

$fruit = new FruitName();           //creating object
echo $fruit->print();               //printing derived class

?>