<!DOCTYPE html>
<!-- 
Create a html form with following input 
Name, Code, Designation,Salary
Submit the data into the php program.
Program will accept all the values and insert it into database.
 -->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .main {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    label {
      width: 100px;
      display: inline-block;
    }
  </style>
</head>

<body>
  <h1> Enter details to insert in database </h1>
  <div class="main">
    <div>
      <form action="insert.php" methods="post">
        <label for="Name">Name: </label>
        <input type="text" name="name" pattern="[A-Za-z]*" title="First Name in alphabet only." required>
        <br>
        <label for="Code">Code: </label>
        <input type="text" name="code" pattern="\d{5}" title="Code in pattern XXXXX only digits" required>
        <br>
        <label for="Designation">Designation: </label>
        <input type="text" name="designation" pattern="[A-Za-z\s]*" title="Designation" required>
        <br>
        <label for="Salary">Salary: </label>
        <input type="text" name="salary" pattern="\d*" title="Salary only number accepted." required>
        <br>
        <br>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</body>

</html>