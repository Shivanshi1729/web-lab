<!DOCTYPE html>
<!-- delete particular employee accouring to his employee code -->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Salary</title>
  <style>
    #main {
      display: flex;
      justify-content: center;
      flex-direction: column;
      align-items: center;
    }

    label {
      display: inline-block;
      width: 150px;
    }
  </style>
</head>

<body>
  <div id="main">
    <div>
      <h1>Remove Employee</h1>
    </div>
    <div>
      <form action="delete.php" method="post">
        <label for="code">Employee Code: </label>
        <input type="text" pattern="\d{5}" name="code" required title="Enter employee code of 5 digit">
        <br>
        <br>
        <input type="submit" value="Update">
      </form>
    </div>
  </div>
</body>

</html>