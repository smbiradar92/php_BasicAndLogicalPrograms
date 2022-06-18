
<?php

//parent class
class State
{
    public function stateName()
    {
        echo "The state name is Karnataka\n ";
    }
}

//child class 1
class City extends State
{

    public function cityName()
    {
        echo "The city name is Bidar\n";
    }
}
//child class 2
class Town extends City
{

    public function townName()
    {
        echo "The town name is Bhalki\n";
    }
}

$display = new Town();              //creating object for only the child class 2 and calling all the other class functions
$display->stateName();
$display->cityName();
$display->townName();


?>