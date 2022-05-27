<!DOCTYPE html>
<!-- read char by char from a file and write vowels to another file -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fle io</title>
</head>

<body>
    <?php
    $myfile = fopen("input.txt", "r") or die("Unable to open file!");
    $out = fopen("output.txt", "w") or die("Unable to open file!");
    while (!feof($myfile)) {
        $ch = fgetc(($myfile));
        if (
            $ch == 'a' || $ch == 'e' || $ch == 'i' || $ch == 'o' || $ch == 'u' ||
            $ch == 'A' || $ch == 'E' || $ch == 'I' || $ch == 'O' || $ch == 'U'
        ) {
            fwrite($out, $ch);
        }
    }
    fclose(($out));
    fclose($myfile);
    ?>
</body>

</html>