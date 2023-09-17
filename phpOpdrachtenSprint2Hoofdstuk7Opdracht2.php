<!DOCTYPE html>
<html>
<head>
    <title>h7 - opdracht 2</title>
</head>
<body>
<form method="post" action="">
    Getal 1: <input type="text" name="number1" required><br><br>
    <input type="radio" name="som" value="optellen" checked> Optellen
    <input type="radio" name="som" value="aftrekken"> Aftrekken
    <input type="radio" name="som" value="vermenigvuldigen"> Vermenigvuldigen
    <input type="radio" name="som" value="delen"> Delen<br><br>
    Getal 2: <input type="text" name="number2" required>
    <br><br>
    <input type="submit" name="bereken" value="Bereken">
    <br><br>
</form>
<?php
if (isset($_POST['bereken'])) {
    $number1 = floatval($_POST['number1']);
    $number2 = floatval($_POST['number2']);
    $som = $_POST['som'];
    $result = 0;

    switch ($som) {
        case 'optellen':
            $result = $number1 + $number2;
            break;
        case 'aftrekken':
            $result = $number1 - $number2;
            break;
        case 'vermenigvuldigen':
            $result = $number1 * $number2;
            break;
        case 'delen':
            if ($number2 != 0) {
                $result = $number1 / $number2;
            } else {
                echo "Kan niet delen door nul.";
            }
            break;
        default:
            echo "Ongeldige som geselecteerd.";
            break;
    }

    echo " $number1 $som $number2 = $result";
}
?>
</body>
</html>
