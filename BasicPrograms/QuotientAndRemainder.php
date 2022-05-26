<?php

$quotient = 0;
$remainder = 0;

$number = readline ('Please enter a number for division :');           //input from user
$divisor = readline ('Please enter the divisor :');       // input from user

// input validation
if(is_numeric($number) || is_numeric($divisor) && is_numeric($number)){
$quotient = round($number / $divisor,2);                         // calculation for quotient
$remainder = round($number % $divisor,2);                         // calculation for remainder
//print result
echo ("For the entered number ".$number. ", the quotient is ".$quotient. " and the remainder is ". $remainder);
}
else{
    echo "Invalid input.\nPlease enter a valid numeric data";
}
?>;