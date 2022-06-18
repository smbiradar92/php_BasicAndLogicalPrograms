<?php

use Fruits as GlobalFruits;

class Fruits{

    public $name;
    public $color;

    function __constructor($name, $color){
        $this ->name = $name;
        $this ->color = $color;

    }

    function __destruct()
    {
        echo "The fruit is {$this ->name} and the color is {$this ->color}.";
    }
}

$apple = new Fruits("Apple", "red")

?>