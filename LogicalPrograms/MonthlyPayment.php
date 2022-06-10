<?php

class Monthlypayment
{

    static function monthlyPayment()
    {

        $principal = readline("Please enter the Principal amount of the loan: $");
        $year = readline("Please enter the number of year: ");
        $rate = readline("Please enter the Rate of Interest (%): ");
        if(is_numeric($principal) && is_numeric($year) && is_numeric($rate)){
        $num = 12 * $year;
        $monthlyRate = $rate / (12 * 100);

        $monthlyPayment = ($principal * $monthlyRate) / (1 - pow((1 + $monthlyRate), (-$num)));

        echo "Monthly payments to be paid over $year years to pay-off $.$principal @ rate of $rate% is : $" .round($monthlyPayment, 3) . "\n";
        }else{
            echo "Please enter a valid input";
        }
    }
}
$payment = new MonthlyPayment();
$payment->monthlyPayment();
