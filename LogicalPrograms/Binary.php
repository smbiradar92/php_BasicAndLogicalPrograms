<?php

function decimalToBinary($decimalNum)
{

    $nibble1 = [];
    $nibble2 = [];
    $swapNibble = [];
    $i = 0;
    $k = 0;
    $binaryArray = [];              //define array to store the binnary values
    while ($decimalNum > 0) {        //finding the binary numbers
        $binaryArray[$i] = $decimalNum % 2;
        $decimalNum = (int)$decimalNum / 2;
        $i++;
    }
    echo "---------decimal to binary conversion----------\n";
    // printing the arrays in reverse order to get the binary numbers in proper sequence 
    for ($j = $i - 1; $j >= 0; $j--) {
        echo $binaryArray[$j];
    }

    echo "\n---------decimal to binary conversion----------\n";
    for($j = 0; $j <=sizeof($binaryArray);$j++){
        if(sizeof($binaryArray) < 4 ){
            echo $binaryArray[$j];
            $nibble1[$j] = $binaryArray[$j]; 
        }else{
            echo $binaryArray[$j];
            $nibble2[$j] = $binaryArray[$j] ;
        }
    }
    echo "\n";

    $swapNibble[$k] = $nibble2[$j].$nibble1[$j];
    for($k = 0; $k <= sizeof($swapNibble); $k++){
        echo $swapNibble[$k];
    }
}
$decimalNum = readline("please enter a decimal number to convert to binary : ");
decimalToBinary($decimalNum);







?>