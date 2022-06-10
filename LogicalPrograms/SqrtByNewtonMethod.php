<?php

class NewtonMethod
{


    static function sqrtNewton($inputC)
    {

        $t = $inputC;
        while (abs($t - $inputC / $t) > (1 * pow(10, -15) * $t)) {
            $t = ($t + $inputC / $t) / 2;
        }
        return "The sqrt of iput number $inputC is : " . $t;
    }
}

$inputC = readline("Please enter a non-negative number to compute the square root: ");
echo NewtonMethod::sqrtNewton($inputC);

?>