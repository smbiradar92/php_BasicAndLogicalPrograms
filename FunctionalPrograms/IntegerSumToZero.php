<?php

$N = readline("Please enter the No. of integers in the array: ");

function inputArray($N)
{

    $intArray = [];

    for ($m = 0; $m < $N; $m++) {                                                   //input array
        $intArray[$m] = readline("Enter the elements of the input array a[$m] : ");
    }

    echo "\nInput elements of Array = [ ";
    for ($i = 0; $i < $N; $i++) {                                                   // print array values 
        echo $intArray[$i] . ",";
    }
    echo "]\n";
    return $intArray;
}

//function to find ttriplets
function findTriplets($N, $array)
{

    $count = 0;                                         // initialise variables for counting of triplets
    echo "The triplets a[i] + a[j] +a[k] are : \n";
    $found = false;                                     //initialising boolean value
    for ($i = 0; $i < $N - 2; $i++) {                     // Looping of values in the position a[i] + a[j] +a[k]
        for ($j = 0; $j < $N - 1; $j++) {
            for ($k = $j + 1; $k < $N; $k++) {
                if ($array[$i] + $array[$j] + $array[$k] == 0) {          //condition if triplet sum is zero
                    echo "$array[$i], $array[$j], $array[$k]";
                    $count++;                                        // count for no. of triplets
                    $found = true;
                }
            }
        }
    }
    echo "\nThe number of triplets that sum to zero in the iput array are " . $count;
    if ($found == false) {
        echo "Triplet is not found";                        //print triplets count
    }
}

//calling functions
$array = inputArray($N);
findTriplets($N, $array);
?>