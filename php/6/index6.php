<!DOCTYPE html>
<!-- update slary of employee according to his code -->
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
      <h1>Update Salary</h1>
    </div>
    <div>
      <form action="index66.php" method="post">
        <label for="code">Employee Code: </label>
        <input type="text" pattern="\d{5}" name="code" required title="Enter employee code of 5 digit">
        <br>
        <label for="salary">New Salary: </label>
        <input type="text" pattern="\d*" name="salary" required title="Enter the new updated salary.">
        <br>
        <br>
        <input type="submit" value="Update">
      </form>
    </div>
  </div>
</body>

</html>