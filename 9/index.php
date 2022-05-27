<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            border-collapse: collapse;
        } 
        td{
            border: 1px solid;
        }
    </style>
</head>


<body>
    <?php
    echo "<table>";
    for ($i = 1; $i <= 6; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 5; $j++) {
            echo "<td style=\"padding: 3px;\">";
            $ans = $i * $j;
            echo $i . "*" . $j . "=" . $i * $j;
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>