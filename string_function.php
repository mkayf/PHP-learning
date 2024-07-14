<?php
    // string length function:
    $country = "Pakistan";
    echo "The character  length of $country is " . strlen($country) . "<br>";

    // string word count function:
    echo "The word count of $country is " . str_word_count($country) . "<br>";

    // string reverse function: 
    echo "The reverse of $country is " . strrev($country) . "<br>";

    // string character position:
    echo "The character position of 'tan' in $country is " . strpos($country, 'tan') . "<br>";

    // string replace character function:
    echo str_replace('Pakistan', 'Turkey', $country) . "<br>";

    // string value function to get variable value in string format:
    echo strval($country) . "<br>";

    // string repeat function:
    echo str_repeat($country, 200) . "<br>";

?>