<?php
echo "-------------Stopwatch program-----------\n";

//initialising variables
$time_start = 0;
$time_stop = 0;
$start = readline("Please enter 1 to start the watch : ");                  //input from user to start the time

if ($start == 1) {                                                        // condition to start the watch
    $time_start = time();
    echo "The stopwatch is started.........\n";
}

$stop = readline("Please enter 2 to stop the stopwatch : ");           //input for stopping the time

if ($stop == 2) {                                                     //condition to stop the time
    $time_stop = time();
    echo "\nThe stopwatch is stopped!!!!!\n";
}

$elapsedTime = $time_stop - $time_start;                                    //calculating elapsed time
echo "The total elapsed time is : " . round($elapsedTime, 2) . " seconds";  //print elapsed time
