<?php
session_start();

if(isset($_SESSION['username'])){
echo "Welcome to the website " . $_SESSION['username'];
echo '<br>';
echo 'Your password is ' . $_SESSION['password'];
}
else{
    echo 'please login to continue';
}
?>