<?php
$c = 0;             // Assuming a third number for swapping

//user input
$a = readline ('Please enter the first number');            
$b = readline ('Please enter the second number');

echo "The numbers before swapping are :" .$a ."," .$b. "\n";

//conditions for swapping
$c = $a;                    // making the value c = value of a
$a = $b;                    // making the value of a = value of b
$b = $c;                    // making the value of b = value of c (which equals to "a" value taken),

echo "The numbers after swapping are :" .$a ."," .$b;       //printing numbers after swapping

?>