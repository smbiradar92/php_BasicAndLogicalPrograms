<?php
$isEven = 0;

$number = readline ('Please enter a number to check even or odd ');     //usere input number

 // calculation for even number and input validation
if(is_numeric($number)){             
    $isEven = $number % 2;
if($isEven == 0){                   // condition for even
    echo ("The enterted number ".$number. " is a even number");
}else{
    echo ("The enterted number ".$number. " is a odd number");
}
}
else{
    echo "Invalid input.\nPlease enter a valid numeric data";
}
?> 