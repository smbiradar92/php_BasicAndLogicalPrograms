<?php

echo "-------------------Reverse a Number--------------------\n";

$N = readline("Please enter a number to Reverse :");               //user input
$reverse = 0;
if(is_numeric($N)){                                     // input validation
for($i = 1; $i <= $N; $i++){                           // revrsing the number using for loop

    $reminder = $N % 10;
    $reverse = ($reverse * 10) + $reminder;
    $N = $N/10;
}
echo "The number after reversing is ".$reverse;             // print reverse number 

}else{
    echo "Invalid input!!!!!\nPlease enter only numerical value";           // print validation error
}

?>