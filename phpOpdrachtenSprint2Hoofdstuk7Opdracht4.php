<!DOCTYPE html>
<html>
<head>
    <title>h7 - opdracht4</title>
</head>
<body>
<h1>Kortingscalculator</h1>
<form method="post" action="">
    prijs: <input type="text" name="bedrag" required><br><br>
    korting (%): <input type="text" name="korting" required><br><br>
    <input type="submit" name="som" value="Uitrekenen">
    <br><br>
</form>
<?php
if (isset($_POST['som'])) {
    $bedrag = floatval($_POST['bedrag']);
    $kortingPercentage = floatval($_POST['korting']);

    $kortingBedrag = ($kortingPercentage / 100) * $bedrag;

    $nieuwBedrag = $bedrag - $kortingBedrag;

    $nieuwBedragOpmaak = number_format($nieuwBedrag, 2);

    echo "bedrag inclusief $kortingPercentage% korting: €$nieuwBedragOpmaak";
}
?>
</body>
</html>
