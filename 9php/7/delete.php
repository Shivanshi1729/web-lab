<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $servername = "localhost:3306";
  $username = "root";
  $password = "";
  $dbName = "web_dev";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbName);

  // Check connection
  if ($conn === false) {
    die("ERROR: Could not connect. "
      . mysqli_connect_error());
  }

  $code = $_REQUEST['code'];

  // Performing insert query execution
  // here our table name is college
  $sql = "DELETE FROM employee WHERE code='$code'";

  if (mysqli_query($conn, $sql)) {
    echo "<h3>Employee removed in database successfully.</h3>";
  } else {
    echo "ERROR: Sorry $sql. " . mysqli_error($conn);
  }
  // Close connection
  mysqli_close($conn);
  ?>
</body>

</html>