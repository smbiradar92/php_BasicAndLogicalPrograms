<?php
$headcount = 0;
$tailcount = 0;

$coinFlipped = readline('Enter the number of times to flip the coin '); //input value for no of flips from user
//condition with validation
if (is_numeric($coinFlipped) && $coinFlipped > 0) {
    for ($i = 0; $i < $coinFlipped; $i++) {
        $result = rand(0, 10) / 10;
        if ($result >= 0.5) {
            $headcount++;                   //incrementing headcount
        } else {
            $tailcount++;                   //incrementing tailcount
        }
    }
} else {
    echo ("Enter a valid input");
    exit(0);
}
$headPercentage = round($headcount * 100 / $coinFlipped, 2); //formula to calculate percentage headcount
$tailPercentage = round(100 - $headPercentage, 2); //formula to calculate percentage headcount

echo "tailPercentage = " . ($tailPercentage) . "\n";  // print % tail count
echo "headPercentage = " . ($headPercentage) . "\n";// print % head count

?>