<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities</title>
</head>
<body>
    <h2>Log in</h2>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <label>Username:</label>
        <input type="text" name="username"><br>
        <label>Password:</label>
        <input type="password" name="password">
        <input type="submit" name="submit" value="Enter">
    </form>
    <a href="homepage.php">back</a>
</body>
</html>

<?php

    if(isset($_POST["submit"])) {



        if(!empty($_POST["username"]) && !empty($_POST["password"])) {

            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            header("Location: activities.php");

            // echo $_SESSION["username"] . "<br>";
            // echo $_SESSION["password"] . "<br>";
        }
        else {
            echo "Try again <br>";
        }



    }
?>