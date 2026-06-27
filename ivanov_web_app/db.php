<?php
    $DB_HOST = getenv("DB_HOST") ?: "192.168.10.108:3306";
    echo "DB_HOST: " . $DB_HOST . "   ";
    $link = mysqli_connect($DB_HOST, "myuser", "mypassword", "mydb");
    if (!$link) {
        die ("ERROR IN CONNECT: " . mysqli_error());
    }
?>
