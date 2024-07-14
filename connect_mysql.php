<?php
    $server_name = 'localhost';
    $username = 'root';
    $password = '';

    // Creating connect to mysql:
    $conn = mysqli_connect($server_name, $username, $password);

    if(!$conn){
        // exit("Sorry we failed to connect: " . mysqli_error());
        echo 'Sorry we failed to connect:';
    }
    else{
        echo '<h1>MySQL Connected Successfully!</h1>';
    }
    

?>