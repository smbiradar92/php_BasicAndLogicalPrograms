<?php

class Fruit{
    protected $name = "Apple";

    public function getName(){
        return $this->name;
    }
}

class FruitName extends Fruit{
    public function print(){
        return $this->name;
    }
}

$fruit = new FruitName();
echo $fruit->print();

?>