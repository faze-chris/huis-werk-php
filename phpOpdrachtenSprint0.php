<?php
date_default_timezone_set("europe/amsterdam");
$today = date("j F Y");
$time = date("z");
$dayOfTheWeek = date("l");
$numberOfTheWeek = date("N");
$time = date("H:I");
$month = date("F");
$daysInMonth = date("t");
$year = date(" Y");
//$week = date("w");

echo "Het is vandaag : $today";

echo "<br>";

echo "vandaag is het de $time dag van het jaar.";

echo "<br>";

echo "$dayOfTheWeek is het de $numberOfTheWeek dag van de week.";

echo "<br>";

echo "het is nu: $time uur";

echo "<br>";

echo "de maand $month heeft in totaal $daysInMonth dagen";

echo "<br>";

//echo "deze week is het week: $week <br>";

//echo "het jaar $year is geen schrikkeljaar";

if (date("L") == 1) {
    echo "het jaar " . date("Y") . " is een schrikkeljaar.";
} else {
    echo "het jaar " . date("Y") . " is geen schrikkeljaar.";
}

//cookies test
setcookie("username", "mondriaan", time() + 3600)
?>
