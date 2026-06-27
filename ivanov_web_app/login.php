<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <main role="main" class="d-flex align-items-center justify-content-center">
            <div class="w-30 h-100">
                <div class="w-30 mb-0 d-flex justify-content-center">
                    <p class="title">Login</p>
                </div>

                <form class="form-signin w-30" action="/login.php" method="post">
                    <h1 class="h3 font-weight-normal w-100 d-flex justify-content-center ">Login data</h1>
                    <label for="login_form" class="sr-only">логин</label>
                    <input name="login" type="text" id="login_form" class="form-control" placeholder="ваш логин" required=true autofocus="">
                    
                    <label for="password_form" class="sr-only">пароль</label>
                    <input name="password" type="text" id="password_form" class="form-control mt-2" placeholder="ваш пароль" required=true>

                    <button class=" btn btn-lg btn-primary btn-block mt-3 teal-500" type="submit" name="submit">login</button>
                </form>
                <a href="/registration.php">registration</a>
            </div>
    </main>
   
    <br>
    <!-- Link to external JavaScript file -->
    <!-- <script src="scripts.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
</body>
</html>


<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
require_once("db.php");

if (isset($_COOKIE["User"])){
    header("Location: /index.php");
    exit();
}

if (isset($_POST["submit"])) {
    $login = $_POST["login"];
    $password = $_POST["password"];

    if (!$login || !$password) {
        die("input all parametrs");
    }
    $sql = "SELECT * FROM users WHERE username='$login' AND pass='$password'";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) == 1) {
        setcookie("User", $login, time() + 7200);
        header("Location: /");
    } else {
        echo "Неправильные данные";
    }

}

mysqli_close($link);
?>