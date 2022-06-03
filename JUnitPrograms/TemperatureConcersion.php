<?php

class TemperatureConversion
{

    static function temperatureConversion()
    {
        //inpu from user
        $temperature = readline("Please enter the value of tempetature: ");
        $option = readline("Please enter from the below options to convert the value of tempetature: \n 1. Celcius to Farhenite\t 2. Farhenite to Celcius");

        switch ($option) {                          //switch case to conver the temp based on user input
            case 1:
                $Farhenite = (($temperature * 9 / 5) + 32);                 // Celcius to Farhenite conversion
                echo "The temperature in Farhenite is : " . round($Farhenite, 2) . "'F\n";
                break;
            case 2:
                $celcius = (($temperature - 32) * 5 / 9);                  //Farhenite to celcius conversion
                echo "The temperature in 'Celcius is : " . round($celcius, 2) . "'C\n";
                break;
            default:
                echo "Please enter a valid input!!!!";
        }
    }
}
$temp = new TemperatureConversion();        //creating object
$temp->temperatureConversion();             //calling function
