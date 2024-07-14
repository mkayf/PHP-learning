<?php
    echo "<h1>Associative Arrays in PHP</h1>";

    // $array = ['hello', 'hi', 'nice', 'good', 'this'];
    // This is called index or numeric array.
    
    
    // This is called associative array in which we assign keys to array elements.

    $favColors = ['Azmeer' => 'Red', 'Hamza' => 'Blue', 'Sufiyan' => 'Green', 'Kaif' => 'Black', 'Ahsan' => 'Orange'];

    // We can also assign numeric keys in this array like:
    // 10 => 'Pink'

    echo $favColors['Sufiyan'] . '<br>';
    
    // Looping through associative array.


    foreach($favColors as $key => $value){
        echo "The favourite color of $key is $value <br>    ";
    }

?>