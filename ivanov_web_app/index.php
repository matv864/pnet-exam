<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
  </head>
  <body>
    <main>
        <h1><?php echo "its in docker compose" ?></h1>
    </main>
    <?php
      ini_set("display errors", 1);
      error_reporting(E_ALL);
      require_once("db.php");
      echo "all good! ITS CONNECTED"
    ?>
    <script src="index.js"></script>
  </body>
</html>




