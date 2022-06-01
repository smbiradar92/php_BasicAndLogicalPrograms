<?php

// read input values fro user
$a = readline('Please enter the first number :');
$b = readline('Please enter the second number ');
$c = readline('Please enter the third number ');

// input validation
if (is_numeric($a) || is_numeric($b) || is_numeric($c) && is_numeric($a) && is_numeric($b)) {

    // conditions for maximum numbers
    if ($a > $b && $a > $c) {
        echo $a . " is greater than " . $c . " and " . $b;
    } elseif ($b > $a && $b > $c) {
        echo $b . " is greater than " . $c . " and " . $a;
    } else {
        echo $c . " is greater than " . $a . " and " . $b;
    }
} else {
    echo "Invalid input.\nPlease enter a valid numeric data";
}

?>