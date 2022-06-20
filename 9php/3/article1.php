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
        Computer science is the study of computation, automation, and information. Computer science spans theoretical disciplines (such as algorithms, theory of computation, and information theory) to practical disciplines (including the design and implementation of hardware and software). Computer science is generally considered an area of academic research and distinct from computer programming.
    </p>
</body>

</html>