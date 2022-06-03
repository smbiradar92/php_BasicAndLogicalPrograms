<?php
$num3 = 0;             // Assuming num1 third number for swapping

//user input
$num1 = readline('Please enter the first number');
$num2 = readline('Please enter the second number');
// input validation

if (is_numeric($num1) || is_numeric($num2) && is_numeric($num1)) {

    echo "The numbers before swapping are :" . $num1 . "," . $num2 . "\n";

    //conditions for swapping
    $num3 = $num1;
    $num1 = $num2;
    $num2 = $num3;
    echo "The numbers after swapping are :" . $num1 . "," . $num2;       //printing numbers after swapping
} else {
    echo "Invalid input\nPlease enter only valid numeric values";
}

?>