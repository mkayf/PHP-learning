<?php
    $str = 'This is some <b>Bold</b> text.';
    $data = htmlspecialchars($str);
    echo "<p>$data</p>";
    echo htmlspecialchars($_SERVER['PHP_SELF']);

?>