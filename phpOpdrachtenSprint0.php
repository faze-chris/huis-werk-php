<?php
  /* ----------- Database Delete ---------- */

/* 
  Delete a row in the database.
*/


date_default_timezone_set("europe/amsterdam");
$today = date("j F Y");

echo "Het is vandaag : $today";

echo "<br>";

$time = date("z");

echo "vandaag is het de $time dag van het jaar.";

echo "<br>";
$dayOfTheWeek = date("l");
$numberOfTheWeek = date("N");

echo "$dayOfTheWeek is het de $numberOfTheWeek dag van de week.";

echo "<br>";

$time = date("H:I");

echo "het is nu: $time uur";

echo "<br>";

$month = date("F");

$daysInMonth = date("t");
echo "de maand $month heeft in totaal $daysInMonth dagen";

echo "<br>";

//$week = date("w");
//
//echo "deze week is het week: $week <br>";

$year = date(" Y");

echo "het jaar $year is geen schrikkeljaar";

?>
