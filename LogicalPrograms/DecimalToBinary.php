<?php

function decimalToBinary($decimalNum)
{

    $i = 0;
    $k = 0;
    $binaryArray = [];              //define array to store the binnary values
    while ($decimalNum > 0) {        //finding the binary numbers
        $binaryArray[$i] = $decimalNum % 2;
        $decimalNum = (int)$decimalNum / 2;
        $i++;
    }
    // printing the arrays in reverse order to get the binary numbers in proper sequence 
    for ($j = $i - 1; $j >= 0; $j--) {
        echo $binaryArray[$j];
    }
}

$decimalNum = readline("please enter a decimal number to convert to binary : ");
decimalToBinary($decimalNum);