<?php

class DayOfWeek
{

    static function dayOfWeek()
    {

        $dayList = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];      // array to store days
        //input from user
        $day = readline("Please enter the day of date in DD format: ");
        $month = readline("Please enter the month of date in MM format: ");
        // $month = readline("Please select the month from below options\n 1. January\t2. February\t3. March\t4. April\t 5. May\t6. June\t7. July\t8. August\t 9. September\t10.October\t11.November\tDecember : \n");
        $year = readline("Enter the year in format YYYY: ");

        //calculations for calculating day
        $prevYear = $year - (14 - $month) / 12;
        $x = $prevYear + ($prevYear / 4) - ($prevYear / 100) + ($prevYear / 400);
        $prevMonth = $month + (12 * (14 - $month) / 12) - 2;
        $dayOfWeek = ($day + $x + (31 * $prevMonth / 12)) % 7;
        $output = $dayList[$dayOfWeek];

        echo "For the input date $day-$month-$year, the day is " . $output . "\n";        // print output
    }
}
$day = new DayOfWeek();     // creating object
$day->dayOfWeek();          //calling function
