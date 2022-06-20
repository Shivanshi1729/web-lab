<!DOCTYPE html>
<html>

<head>
  <title>Insert Page</title>
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

  // Taking all 5 values from the form data(input)
  $name = $_REQUEST['name'];
  $code = $_REQUEST['code'];
  $designation = $_REQUEST['designation'];
  $salary = $_REQUEST['salary'];

  // Performing insert query execution
  // here our table name is college
  $sql = "INSERT INTO employee VALUES ('$name', '$code', '$designation', '$salary')";

  if (mysqli_query($conn, $sql)) {
    echo "<h3>Data stored in a database successfully.</h3>";
    echo nl2br("\n$name\n $code\n $designation\n $salary");
  } else {
    echo "ERROR: Sorry $sql. " . mysqli_error($conn);
  }
  // Close connection
  mysqli_close($conn);
  ?>
</body>

</html>