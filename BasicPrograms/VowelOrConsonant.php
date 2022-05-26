<?php
$vowel = ['a', 'e', 'i', 'o', 'u'];                         // array for vowels
$string = readline ('Please enter a alphabet ');             // user input

// condition for vowels, with input validation
if(is_string(in_array(strtolower($string), $vowel))){           
    // print vowel or consonant
    echo " The entered alphabet ".$string. " is a vowel";            
}else{
    echo " The entered alphabet ".$string. " is a consonant";
}

?>