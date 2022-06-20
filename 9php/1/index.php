<!DOCTYPE html>
<!-- associative array sort in ascending and descending order using numeric key -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php
    $students = [ "Shiv"=> 50, "Ram"=>100, "Raj"=>40, "Aman"=> 60 ];
    echo "<h2>Values:</h2>";
    echo "<ul>";
    foreach ($students as $student => $rollno){
        echo "<li>$student  $rollno</li>";
    }
    echo "</ul>";

    echo "<h2>Sorted by values:</h2>";
    echo "Ascending: <br>";
    asort($students);
    echo "<ul>";
    foreach ($students as $student => $rollno){
        echo "<li>$student  $rollno</li>";
    }
    echo "</ul>";
    echo "Descending: ";
    arsort($students);
    echo "<ul>";
    foreach ($students as $student => $rollno){
        echo "<li>$student  $rollno</li>";
    }
    echo "</ul>";

    $scores = [ "10" => 50, "1"  => 100, "12" => 40, "16" => 60 ];
    echo "<h2>Numeric Keys:</h2>";
    echo "<ul>";
    foreach ($scores as $s => $ss){
        echo "<li>$s  $ss</li>";
    }
    echo "</ul>";
    echo "<h2>Sorted by keys:</h2>";
    krsort($scores);
    echo "<ul>";
    foreach ($scores as $s => $ss){
        echo "<li>$s  $ss</li>";
    }
    echo "</ul>";
?>

</body>

</html>