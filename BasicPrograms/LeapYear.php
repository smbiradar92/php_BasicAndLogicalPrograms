<?php

$inputYear = readline("Please enter year to check for leap year :");        // input for year from user

//condition for input validation and  digits less than 4       

if(is_numeric($inputYear) > 1000 && $inputYear < 10000){          
    if((($inputYear % 4 == 0) && ($inputYear % 100 != 0)) || ($inputYear % 400 == 0)){          // condition for leap year
        echo ("The entered year " .$inputYear . " is a leap year");                             
    }else{
        echo ("The entered year " .$inputYear . " is not a leap year");
    }
}else{
    echo "Invalid entry,\nPlease enter a four digit year only";
}

?>