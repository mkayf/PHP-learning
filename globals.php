<?php
    // $GLOBAL['KEY_NAME'];
    // An associative array containing references to all variables which are currently defined in the global scope or outer most scope of the script. The variable names are the keys of the array.

    $name = 'Muhammad kaif';
    $age = 21;
    function myFunction(){
        echo $GLOBALS['name'];
        echo $GLOBALS['age'];
    }

    myFunction();
?>