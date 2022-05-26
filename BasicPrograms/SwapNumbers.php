<?php
$c = 0;             // Assuming a third number for swapping

//user input
$a = readline ('Please enter the first number');            
$b = readline ('Please enter the second number');
// input validation

if(is_numeric($a)||is_numeric($b) && is_numeric($a)){

echo "The numbers before swapping are :" .$a ."," .$b. "\n";

//conditions for swapping
$c = $a;                    
$a = $b;                    
$b = $c;                    
echo "The numbers after swapping are :" .$a ."," .$b;       //printing numbers after swapping
}
else{
    echo "Invalid input\nPlease enter only valid numeric values";
}
?>