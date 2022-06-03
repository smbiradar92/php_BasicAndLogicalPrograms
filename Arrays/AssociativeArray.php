<?php

$age = array("Peter"=>"35", "Sam"=>"45","Ram"=>"25");
//$age['Peter'] = "43";

foreach($age as $x => $names){
    echo "key= ".$x. ", Value = ".$names ."\n";
}
echo "---------------------input--------------------\n";

$index = readline("Please enter the number of keys and values to be entered");
$associateArray = [];

for($i = 0; $i<=$index; $i++){

    $key = readline("Enter the key ");
    $value = readline("Enter the value");

    $associateArray[$key] = $value;
}

echo "Elements are : \n";

foreach($associateArray as $key => $value){
    echo $key . "=>" . $value;
    echo "\n";
}

?>