<?php
    echo '<h2>We are creating DATABASE using PHP</h2>';

    // first we need to connect to mysql:

    $server_name = 'localhost';
    $username = 'root';
    $password = '';

    $conn = mysqli_connect($server_name, $username, $password);

    if(!$conn){
        echo '<h4>Connection failed!</h4>';
    }
    else{
        echo '<h4>Connected Successfully!</h4>';
    }

    // Now we create database using SQL Query:

    $SQL = "CREATE DATABASE motorcylesDB";

    $result = mysqli_query($conn, $SQL);

    // check for database creation success:

    if($result){
        echo '<h1>DATABASE created successfully<h1>';
    }
    else{
        echo '<h3>DATABASE creation failed because: </h3>' . mysqli_error($conn);
    }
?>