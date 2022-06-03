<?php

$number = readline("Please enter the number to find the factors ");            //input from user

// input validation
if (is_numeric($number) && ($number > 0)) {
    echo "The factors of " . $number . " are : \n";
    for ($i = 2; $i <= $number; $i++) {                           // for loop for repeating the factors
        while ($number % $i == 0) {                               //looping to print each time to divide by $i till zero 
            echo $i . "\n";
            $number = $number / $i;
        }
    }
} else {
    echo "Invalid input.\nPlease enter a valid numeric data";
}

?>