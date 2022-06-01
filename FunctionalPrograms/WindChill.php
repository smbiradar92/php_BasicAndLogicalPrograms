<?php
// user inputs
$t = readline("Please enter the value of temperature larger than 50, t : ");
$v = readline("Please enter the value of velocity in the range (3, 120), v : ");

// function for calulating windchill
function windChill($v, $t)
{
    //validation
    if (is_integer($t) < abs(50) || is_integer($v = range(3, 150))) {

        $speed = pow($v, 0.16);                                 // calulate speed by pow function
        $w = 35.74 + 0.6215 * $t + (0.4275 * $t - 35.75) * $speed;    // windchill formula
        echo "The effecttive temperature(wind chill) is : " . (int)($w) . " *F";
    } else {
        echo "Invalid input!!\nPlease enter a value in the given range only in integer format ";
    }
}

windChill($v, $t);          // calling function
?>