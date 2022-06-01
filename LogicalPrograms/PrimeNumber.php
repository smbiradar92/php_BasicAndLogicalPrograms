<?php

echo "---------------------Checking for a PrimeNumber---------------------\n";

$count = 0;
$N = readline("Please enter a number : ");          //user input

//input validation
if (is_numeric($N)) {
    for ($i = 1; $i <= $N; $i++) {                       //loop condition for getting number of counts, If count is 2 times  than it is a prime number
        if ($N % $i == 0) {
            $count++;
        }
    }
    if ($count == 2) {                                    // prime number condition
        echo $N . " is a Prime Number";
    } else {
        echo $N . " is a not Prime Number";
    }
} else {
    echo "Invalid input!!!!!\nPlease enter only numerical value";           //validation output
}
?>