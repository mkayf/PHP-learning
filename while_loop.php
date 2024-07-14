<?php
    echo "<h1>While loop in PHP</h1>";

    $num = 1;
    $table = 13;
    while($num <= 10){
        echo "$table x $num = " . $table * $num;
        echo "<br>";
        $num++;
    }

?>