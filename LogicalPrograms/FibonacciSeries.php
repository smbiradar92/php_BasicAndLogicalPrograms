<?php
echo "------------Fibonacci Series----------------\n";

$a = readline("Please enter the first number of the Fibonacci series ");
$b = readline("Please enter the second number of the Fibonacci series ");

//input value from user
$N = readline("Please enter the number of elements in the fibonacci series :");
echo "The fibonacci series is : ";                                  //printing initial two values

// input validation
if (is_numeric($N)) {
    //looping next values till user input
    for ($i = 1; $i <= $N; $i++) {
        $c = $a + $b;
        echo $c . ",";
        $a = $b;
        $b = $c;
    }
} else {
    echo "Invalid input!!!!!\nPlease enter only numerical value";
}
