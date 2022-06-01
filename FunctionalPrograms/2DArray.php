<?php

// input from user for number of rows and columns
$m = readline("Please enter the number of rows in the array : ");
$n = readline("Please enter the number of columns in the array : ");

function create2DArray($m, $n)
{

  $Elements = [];                                     // initialising array to a variable

  for ($i = 0; $i < $m; $i++) {                     // looping to get the row and column index values
    for ($j = 0; $j < $n; $j++) {
      $Elements[$i][$j] = readline("Enter the values [$i] [$j] ");              // taking input from users
    }
  }

  //printing values
  for ($i = 0; $i < $m; $i++) {
    for ($j = 0; $j < $n; $j++) {
      echo $Elements[$i][$j] . " ";
    }
    echo "\n";
  }
}

create2DArray($m, $n);            //calling functions
?>