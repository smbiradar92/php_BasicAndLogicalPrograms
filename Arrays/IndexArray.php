<?php

$array = [];
$input = readline("please enter the number of elements in the array ");

function addElementsToArray($input)
{

    //input from user
    for ($i = 0; $i <= $input; $i++) {
        $array[$i] = readline(" Please enter the element A[$i] : ");
    }

    echo "$array = [ ";
    //printing values
    for ($i = 0; $i <= $input; $i++) {
        echo $array[$i] . " ";
    }
    echo "]";
}

addElementsToArray($input);
?>