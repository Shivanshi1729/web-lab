<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Welcome to a new session!</h1>
    <form action="logout.php" method="POST">
        <input type="submit" value="Logout!">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["rollno"] = $_POST["rollno"];
    }
    ?>
    <p>
        <?php
        echo "Name:" . $_SESSION["name"];
        echo "<br>";
        echo "Roll No:" . $_SESSION["rollno"];
        ?>
    </p>

    <h2>Read Something? Here:</h2>
    <ul>
        <li><a href="./article1.php">Article one</a></li>
        <li><a href="./article2.php">Article two</a></li>
    </ul>
</body>

</html>