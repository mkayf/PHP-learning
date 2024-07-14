<?php
    echo 'setting cookies';
    echo '<br>';
    $cookie_name = 'user';
    $cookie_value = 'Muhammad Kaif';

    // This is the function below to use cookies.
    setcookie($cookie_name,$cookie_value,time() + (86400 * 30), '/');

    // we can also set multiple cookies by calling this function again: 
    setcookie('database', 'mysql', time() + 3600, "/");

    if(isset($_COOKIE['user']) && isset($_COOKIE['database'])){
        echo $_COOKIE['user'];
        echo '<br>';
        echo $_COOKIE['database'];
        echo '<br>';
    }
    else{
        echo 'no cookie found';
    }

    // Cookies are available in every file of that directory if we use '/' in the function as an argument.

    // we can also modify the cookies by setcookie() function and changing the values.

    

?>