<?php

$number = readline('Please enter the number to find the prime factors \n ');            //input from user

// input validation
if (is_numeric($number) && ($number > 0)) {
    "The factors of " . $number . " are : ";
    for ($i = 2; $i*$i <= $number; $i++ ) {                           // for loop for repeating the factors
        if ($number % $i == 0 ) {
            $factors = $number/$i;
            echo $i. "\n". $factors ."\n" ;
            }

        }
    
} else {
    echo "Invalid input.\nPlease enter a valid numeric data";
}
