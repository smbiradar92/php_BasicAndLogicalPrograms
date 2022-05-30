<?php

//input values from user
$x = readline("Please enter the value of x :");         
$y = readline("Please enter the value of y :");

// funtion to calculate distance
function calculateDistance($x, $y){

     $distance = sqrt(pow($x, 2) + pow($y, 2));                                 // Eucledian formula for distance
     echo "The distance between the point, ($x, $y) and the origin, (0, 0) is: ".round($distance, 2);    // prnting the values and distance
     
}

calculateDistance($x, $y);                              // caling function to calculate distance

//echo "Invalid input!!! \nPlease enter only integer Values ";

?>
