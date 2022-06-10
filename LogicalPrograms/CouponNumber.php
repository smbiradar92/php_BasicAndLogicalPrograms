<?php
echo "------------Coupon generator----------------\n";

$char = "ABCDEFGHIJKLMNOPQRSTUVWX1234657890";                                       //Defining a variable of charectes
$num = readline("Please enter the no of distinct coupon numbers to be generated num : ");       // inputs from user
$len = readline("Please enter the length of the coupon number : ");

function generateCouponNumber($char, $num, $len)                  // function to generate coupon numbers
{
    echo "Coupons genrated are : \n";
    for ($j = 0; $j < $num; $j++) {                          // Looping to get coupon numbers from given variable
        for ($i = 0; $i < $len; $i++) {
            $random = str_shuffle($char);
            echo $random[0];
        }
        echo "\n";
    }
}

generateCouponNumber($char, $num, $len);                  // calling function
