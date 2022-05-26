<?php

// initialize the variaables
$i = 0.0;
$sum = 0;

//user input for N value
$num = readline ("Please enter the harmonic value of N :");

// loping for the Harmonic series
echo "The Harmonic Progression series is ";
for( $i = 1; $i<=$num; $i++){
    $sum =  $sum + (1/$i);
    echo $sum . ",";
}
echo "\nThe Harmonic value of Nth term is " .round($sum,2);         // priniting Nth term round off to 2 values.

?>