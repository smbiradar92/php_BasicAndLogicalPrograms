<?php

$sum = 0;
echo "-----------------Check a number is Perfect or Not perfect---------------\n";
$N = readline("Please enter a number :");

// input validation
if(is_numeric($N)){
for($i = 1; $i <= $N/2; $i++){                    // looping to get all the factors
    if($N % $i == 0 ){                           // condition for getting the factors
        $sum = $sum + $i;                             // calculating the sum of factors
        echo $sum.",";
    }
    }
    if($sum == $N){                             // condition to check for perfect number
        echo "\n".$N." is a Perfect number";
    }else{
        echo "\n".$N." is not a Perfect number";
    }
}else{
    echo "Invalid input!!!!!\nPlease enter only valid numerical value";
}

?>