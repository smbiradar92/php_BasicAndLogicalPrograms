<?php
echo "-------------Stopwatch program-----------";

//initialising variables
$time_start = 0;
$time_stop = 0;
$start = readline("Please enter s key to start the watch : ");                  //input from user to start the time

if ($start == "s") {                                                        // condition to start the watch
    $time_start = microtime(true);
    echo "The stopwatch is started.........\n";
}

$stop = readline("Please enter e key to stop the stopwatch : ");           //input for stopping the time

if ($stop == "e") {                                                     //condition to stop the time
    $time_stop = microtime(true);
    echo "\nThe stopwatch is stopped!!!!!\n";
}

$elapsedTime = $time_stop - $time_start;                                    //calculating elapsed time
echo "The total elapsed time is : " . round($elapsedTime, 2) . " seconds";  //print elapsed time
?>