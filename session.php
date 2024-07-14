<?php
// session is used to store and manage information across multiple pages of the web.
// session_start is a function used to start a session whenever we use to access session values.
session_start();
$_SESSION['username'] = 'Muhammad Kaif';
$_SESSION['password'] = 'Xtylish1';
echo 'Session has been set';
?>