<?php

$number = readline('Please enter the number to find the prime factors \n ');            //input from user

echo "The factors of ".$number. " are : \n";
for($i = 2; $i*$i <= $number; $i++){                           // for loop for repeating the factors
    if($number % $i == 0){                                  // condition for prime number
        echo $i.",\n";                                      // pint factors
    } 
}

?>