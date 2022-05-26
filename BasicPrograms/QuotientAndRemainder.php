<?php

$quotient = 0;
$remainder = 0;

$number = readline ('Please enter a number');           //input from user
$divisor = readline ('Please enter the divisor');       // input from user

// input validation
is_numeric($quotient = $number / $divisor);                         // calculation for quotient
is_numeric($remainder = $number % $divisor);                         // calculation for remainder

//print result
echo ("For the entrerd number ".$number. "\n, the quotient is ".$quotient. "and the remainder is ". $remainder);

?>;