<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title = "Variables in php"; echo $title; ?></title>
</head>
<body>

<?php
    // Variables in php start with $ followed by name of it.    
    $name = "Kaif";
    echo "<h1>$name is a good boy!</h1>";

    $a = 3;
    $b = 7;
    $sum = $a + $b;
    echo $sum;
    echo '<br>';
    echo $_COOKIE['user'];
    echo '<br>';
    echo $_COOKIE['database'];
?>
</body>
</html>