<!DOCTYPE html>
<html>

<body>
    <?php
    $ceu = array(
        "Italy" => "Rome",
        "Luxembourg" => "Luxembourg",
        "Belgium" => "Brusses"
    );
    asort($ceu);
    foreach ($ceu as $country => $capital) {
        echo "The capital of $country is $capital<br>";
    }
    ?>
</body>

</html>