<?php
// user inputs
$temp = readline("Please enter the value of temperature(*F) larger than 50, temp : ");
$velocity = readline("Please enter the value of velocity(miles/hr) in the range (3, 120), velocity$velocity : ");

// function for calulating windchill
function windChill($velocity, $temp)
{
    //validation
    if (is_double($temp) < abs(50) || is_double($velocity = range(3, 150))) {

        $speed = pow($velocity, 0.16);                                 // calulate speed by pow function
        $windChill = 35.74 + 0.6215 * $temp + (0.4275 * $temp - 35.75) * $speed;    // windchill formula
        echo "The effecttive temperature(wind chill) is : " . (int)($windChill) . " *F";
    } else {
        echo "Invalid input!!\nPlease enter a value in the given range only in integer format ";
    }
}

windChill($velocity, $temp);          // calling function
