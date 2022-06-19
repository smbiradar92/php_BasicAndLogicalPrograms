<?php
echo "------------Coupon generator----------------\n";

function generateCouponNumber()                  // function to generate coupon numbers
{
    $char = "ABCDEFGHIJKLMNOPQRSTUVWX1234657890";                                       //Defining a variable of charectes
    $num = readline("Please enter the number of the coupon numbers to be generated : ");
    $len = readline("Please enter length of distinct coupon number to be generated num : ");       // inputs from user

    $coupon = '';           //coupon string
    $array = [];
    $couponArray = [];      //array to store initaial coupon
    echo "Coupons generated are : \n";
    for ($j = 0; $j < $num; $j++) {
        for ($k = 0; $k < $len; $k++) {
            for ($i = 0; $i <= $len; $i++) {
                $random = rand(0, strlen($char) - 1);
                $coupon = $char[$random];
                // echo $coupon;
            }
            //storing the coupons into a empty
            //array to get coupon of required size
            $couponArray[$k] = $coupon;
            //converting the coupon to string by using implode
            $string = implode("", $couponArray);
            //storing only the distinct coupons to a new array with condition to  check repeatition 
            if (empty($array[$j])) {
                $array[$j] = $string;
            } elseif ($array[$j] == $string) {
                echo "coupon already exists!!!!!!, generating new coupon\n";
            } else {
                $array[$j] = $string;
            }
        }
        //printing array
        echo $array[$j] . "\n";
    }
}
// calling function
generateCouponNumber();

?>