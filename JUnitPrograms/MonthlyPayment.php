<?php

class Monthlypayment
{

    static function monthlyPayment()
    {

        $principal = readline("Please enter the Principal amount of the loan: $");
        $year = readline("Please enter the number of year: ");
        $rate = readline("Please enter the Rate of Interest (%): ");

        $num = 12 * $year;
        $monthlyRate = $rate / (12 * 100);

        $monthlyPayment = ($principal * $monthlyRate) / (1 - pow((1 + $monthlyRate), (-$num)));

        echo "Monthly payments to be paid over $year years to pay-off $.$principal @ rate of $rate% is : $" .round($monthlyPayment, 3) . "\n";
    }
}
$payment = new MonthlyPayment();
$payment->monthlyPayment();
