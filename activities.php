<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Activities</h2>
    <form action="activities.php" method="post">
        <input type="submit" name="logout" value="Log out">
    </form>
</body>
</html>

<?php
    if(isset($_POST["logout"])) {
        session_destroy();
        header("Location: login.php");
    }
?>