<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Displaying data from mysql to the html document.</title>
</head>
<body>
<?php
    $server_name = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'usersdb';

    $connection = mysqli_connect($server_name,$username,$password,$database);

    if(!$connection){
        die('Connection failed due to ' . mysqli_connect_error($connection));
    }
    else{
        echo 'Connection successful!';
    }

    $SQL = 'SELECT * FROM signup_details';
    $result = mysqli_query($connection, $SQL);

    //to find the number of records this function is used:
    $records = mysqli_num_rows($result);
    echo '<br>';
    echo $records;
?>

<table style="border: 2px solid black;">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Email</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($records > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo '<tr><td>' . $row['user_ID']  . '</td><td> ' . $row['firstname'] . '</td><td>' . $row['lastname'] . '</td><td>' . $row['email'] . '</td><td>' . $row['password'] . '</td></tr>';
                                }
                            }                 
                        
                        ?>
                    </tbody>
                </table>
</body>
</html>