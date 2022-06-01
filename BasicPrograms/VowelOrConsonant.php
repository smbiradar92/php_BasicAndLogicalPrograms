<?php
$vowel = ['a', 'e', 'i', 'o', 'u'];                         // array for vowels
$string = readline('Please enter a alphabet ');             // user input

// input validation
if (preg_match("/^[a-zA-z]{1}$/", $string)) {
    // condition for vowels, with input validation
    if ((in_array(strtolower($string), $vowel))) {
        // print vowel or consonant
        echo " The entered alphabet " . $string . " is a vowel";
    } else {
        echo " The entered alphabet " . $string . " is a consonant";
    }
} else {
    echo "Invalid input.\nPlease enter a valid alphabet";
}
?>