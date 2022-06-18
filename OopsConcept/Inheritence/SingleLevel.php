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

$city = new City();     //creating object for derived class
$city->stateName();     //calling parent class from derived class function
$city->cityName();      //calling derived class function

?>