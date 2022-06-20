<!DOCTYPE html>
<!--  database table -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid;
            padding: 5px;
        }
    </style>
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
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";

    $sql = "SELECT * FROM employee";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Designataion</th>
                    <th>Salary</th>
                </tr>
            </thead>
        ";
        // output data of each row
        echo "<tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <td>" . $row["Name"] . "</td>
                <td>" . $row["Code"] . "</td>
                <td>" . $row["Designation"] . "</td>
                <td>" . $row["Salary"] . "</td>
            </tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "No records found.";
    }
    ?>
</body>

</html>