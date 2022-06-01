<?php
echo "------------Coupon generator----------------";

$char = "ABCDEFGHIJKLMNOPQRSTUVWX1234657890";                                       //Defining a variablw of charectes
$N = readline("Please enter the no of distinct coupon numbers to be generated N : ");       // inputs from user
$len = readline("Please enter the length of the coupon number : ");

function generateCouponNumber($char, $N, $len)                  // function to generate coupon numbers
{
    echo "Coupons genrated are : \n";
    for ($j = 0; $j <= $N; $j++) {                          // Looping to get coupon numbers from given variable
        for ($i = 0; $i <= $len; $i++) {
            $random = str_shuffle($char);
            echo $random[0];
        }
        echo "\n";
    }
}

generateCouponNumber($char, $N, $len);                  // calling function
?>