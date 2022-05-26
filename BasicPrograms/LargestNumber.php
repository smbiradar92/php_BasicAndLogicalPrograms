<?php

// read input values fro user
$a = readline ('Please enter the first number :');
$b = readline ('Please enter the second number ');
$c = readline ('Please enter the third number ');

// conditions for maximum numbers
if($a > $b && $a > $c){
    echo $a . " is greater than ". $c ." and " . $b;
}elseif ($b > $a && $b > $c) {
    echo $b . " is greater than ". $c ." and " . $a;
}else{
    echo $c . " is greater than ". $a ." and " . $b;
}

?>