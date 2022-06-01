<?php

$a = readline("Please enter the value of a : ");
$b = readline("Please enter the value of b : ");
$c = readline("Please enter the value of c : ");

//function to calculate value of delta
function calculateDelta($a, $b, $c)
{
    $delta = $b * $b - 4 * $a * $c;             // writing formula to calculate delta
    return $delta;
}

//function to calculate the roots of the function.
function calculateRoots($a, $b, $c)
{
    $Delta = calculateDelta($a, $b, $c);                        // Defining a variable to call the function delta
    $root1 = -$b + sqrt(($Delta / 2 * $a));                         // calculating the value of root1 and root2    
    $root2 = -$b - sqrt(($Delta / 2 * $a));

    echo " The value of delta is : " . round($Delta, 0) . "\n";         // printing the values of delta, root1 and root2
    echo "The value of the Root1 of x is : " . (int)($root1) . "\n";
    echo "The value of the Root2 of x is : " . (int)($root2) . "\n";
}

calculateRoots($a, $b, $c);             // calling function

?>