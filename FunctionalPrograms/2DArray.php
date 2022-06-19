<?php

// input from user for number of rows and columns
$row = readline("Please enter the number of rows in the array : ");
$column = readline("Please enter the number of columns in the array : ");

function create2DArray($row, $column)
{

  $Elements = [];                                     // initialising array to a variable

  for ($i = 0; $i < $row; $i++) {                     // looping to get the row and column index values
    for ($j = 0; $j < $column; $j++) {
      $Elements[$i][$j] = readline("Enter the values [$i] [$j] ");              // taking input from users
    }
  }

  //printing values
  for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j < $column; $j++) {
      echo $Elements[$i][$j] . " ";
    }
    echo "\column";
  }
}

create2DArray($row, $column);            //calling functions
?>