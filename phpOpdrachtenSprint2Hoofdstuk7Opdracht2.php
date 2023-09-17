<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
<h1>Calculator</h1>
<form method="post" action="">
    Getal 1: <input type="text" name="getal1" required><br><br>
    Getal 2: <input type="text" name="getal2" required><br><br>
    Kies een bewerking:
    <input type="radio" name="bewerking" value="optellen" checked> Optellen
    <input type="radio" name="bewerking" value="aftrekken"> Aftrekken
    <input type="radio" name="bewerking" value="vermenigvuldigen"> Vermenigvuldigen
    <input type="radio" name="bewerking" value="delen"> Delen<br><br>
    <input type="submit" name="bereken" value="Bereken">
</form>

<?php
if (isset($_POST['bereken'])) {
    $getal1 = floatval($_POST['getal1']);
    $getal2 = floatval($_POST['getal2']);
    $bewerking = $_POST['bewerking'];
    $resultaat = 0;

    switch ($bewerking) {
        case 'optellen':
            $resultaat = $getal1 + $getal2;
            break;
        case 'aftrekken':
            $resultaat = $getal1 - $getal2;
            break;
        case 'vermenigvuldigen':
            $resultaat = $getal1 * $getal2;
            break;
        case 'delen':
            if ($getal2 != 0) {
                $resultaat = $getal1 / $getal2;
            } else {
                echo "Kan niet delen door nul.";
            }
            break;
        default:
            echo "Ongeldige bewerking geselecteerd.";
            break;
    }

    echo "Resultaat: $getal1 $bewerking $getal2 = $resultaat";
}
?>
</body>
</html>
