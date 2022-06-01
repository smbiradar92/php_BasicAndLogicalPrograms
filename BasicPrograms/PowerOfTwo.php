<?php

$power = readline("Please enter the value of the power,N ");          // input from user for the power value N

// input validation
if (is_numeric($power)) {
    //    condition for N value less than 31
    if ($power >= 0 and $power < 31) {
        for ($i = 0; $i <= $power; $i++) {                         // looping for power values
            $result = pow(2, $i);                            // formula to calculate the power values of 2
            echo ("The power of 2^" . $i . "is " . $result . "\n");
        }
    } else {
        echo ("Please enter a number that is less than 31 only");
    }
} else {
    echo "Invalid input.\nPlease enter a valid numeric data";
}

?>