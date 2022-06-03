<?php

// read input values from user
$num1 = readline('Please enter the first number :');
$num2 = readline('Please enter the second number ');
$num3 = readline('Please enter the third number ');

// input validation
if (is_numeric($num1) || is_numeric($num2) || is_numeric($num3) && is_numeric($num1) && is_numeric($num2)) {

    // conditions for maximum numbers
    if ($num1 > $num2 && $num1 > $num3) {
        echo $num1 . " is greater than " . $num3 . " and " . $num2;
    } elseif ($num2 > $num1 && $num2 > $num3) {
        echo $num2 . " is greater than " . $num3 . " and " . $num1;
    } else {
        echo $num3 . " is greater than " . $num1 . " and " . $num2;
    }
} else {
    echo "Invalid input.\nPlease enter num1 valid numeric data";
}
