<?php

class VendCoin
{

    public static function coins($notes, $amount)
    {
        $tempAmount = $amount;
        $totalNotes = 0;
        $flag = false;
        for ($i = 0; $i < sizeof($notes); $i++) {
            if (floor($tempAmount / $notes[$i] > 0)) {
                $NumOfNotes = floor($tempAmount / $notes[$i]);
                $tempAmount = floor($tempAmount % $notes[$i]);
                echo $NumOfNotes . " " . $notes[$i] . "Rs.\n";
                $totalNotes++;
                $flag = true;
                break;
            }
        }

        if ($flag = true) {
            VendCoin::coins($notes, $tempAmount);
        }
        return $totalNotes;
    }
}
$notes = array('1000', '500', '100', '50', '20', '10', '5', '2', '1');
$amount = readline("Please enter the amount to be withdrawn: ");
while ($amount < 1) {
    VendCoin::coins($notes, $amount);
}
