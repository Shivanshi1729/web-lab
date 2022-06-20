<?php session_start(); ?>
<!DOCTYPE html>
<!-- 
Program to maintain session of particular user in different pages. 
At the end if user wants to logout, then destroy the session. -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="name" placeholder="Enter your name:"> <br>
        <label for="rollno">Roll No:</label>
        <input type="text" name="rollno" placeholder="Enter your roll no:"> <br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>