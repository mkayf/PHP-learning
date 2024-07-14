<?php
    $server_name = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'usersdb';

    $connection = mysqli_connect($server_name,$username,$password,$database);

    if(!$connection){
        echo 'Connection failed!';
    }
    else{
        echo 'Connection successful!';
    }

    echo '<br><br>';

    $SQL = 'SELECT * FROM signup_details';
    $result = mysqli_query($connection, $SQL);

    $numOfRecords = mysqli_num_rows($result);

    $userID = 0;
    if($numOfRecords > 0){
        while($row = mysqli_fetch_assoc($result)){
            $userID++;
            echo $userID . $row['firstname'] . $row['lastname'] . $row['email'] . $row['password'] . '<br><br>';
        }
    }
    else{
        echo 'no records found';
    }


    $SQL = "UPDATE signup_details SET firstname = 'Muhammad', lastname = 'Zaki' WHERE user_ID = 5";

    $result = mysqli_query($connection, $SQL);
    
    $affectedRows = mysqli_affected_rows($connection);
    echo $affectedRows;
    
    
?>