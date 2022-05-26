<?php
$isEven = 0;

$number = readline ('Please enter a number to check even or odd ');     //usere input number

 // calculation for even number and input validation
is_numeric($isEven = $number % 2);             

if($isEven == 0){                   // condition for even
    echo ("The enterted number ".$number. " is a even number");
}else{
    echo ("The enterted number ".$number. " is a odd number");
}

?> 