<?php

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

$city = new City();
$town = new Town();

echo "-----calling function by derived class 1 object-------\n";
$city->stateName();       //calling parent class function by derived class 1 object
$city->cityName();        //calling same class object

echo "-----calling functions by derived class 2 object-----\n";
$town->stateName();       //calling parent class function by derived class 2 object
$town->cityName();         //calling derived class 1 function by derived class 1 object   
$town->townName();        //calling same class object

?>