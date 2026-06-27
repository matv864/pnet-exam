<?php
    $DB_HOST = getenv("DB_HOST") ?: "192.168.10.108:3306";
    echo "DB_HOST: " . $DB_HOST . "   ";
    $link = mysqli_connect($DB_HOST, "myuser", "mypassword", "mydb");
    if (!$link) {
        die ("ERROR IN CONNECT: " . mysqli_error());
    }

    $sql = "CREATE TABLE IF NOT EXISTS users(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(30) NOT NULL,
        pass VARCHAR(30) NOT NULL
    )";
    if (!mysqli_query($link, $sql)) {
        echo "". mysqli_error($link);
    }

?>
