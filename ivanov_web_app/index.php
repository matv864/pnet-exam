<?php
if (!isset($_COOKIE["User"])){
  header("Location: /login.php");
  exit();
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>приветствия пользователя</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
  </head>
  <body>
    <main>
        <h1><?php echo "Привет, " . $_COOKIE["User"] ?></h1>
    </main>
  </body>
</html>




