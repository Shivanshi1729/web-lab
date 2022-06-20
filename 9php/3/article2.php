<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artile 1</title>
</head>

<body>
    <form action="logout.php" method="POST">
        <input type="submit" value="Logout!">
    </form>
    <p>
        <?php
        echo "Name:" . $_SESSION["name"];
        echo "<br>";
        echo "Name:" . $_SESSION["rollno"];
        ?>
    </p>

    <p>
        The fundamental concern of computer science is determining what can and cannot be automated. The Turing Award is generally recognized as the highest distinction in computer science.
    </p>
</body>

</html>