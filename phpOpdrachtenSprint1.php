<?php
//opdracht 1
$tijd = date("H");

if ($tijd >= 6 && $tijd < 12) {
    echo "het is ochtend";
} elseif ($tijd >= 12 && $tijd < 18) {
    echo "het is middag";
} elseif ($tijd >= 18 && $tijd < 24) {
    echo "het is avond";
}

//opdracht 2
echo "<br>";
switch ($tijd) {
    case ($tijd >= 6 && $tijd < 12) :
        echo "het is ochtend";
        break;
    case ($tijd >= 12 && $tijd < 18) :
        echo "het is middag";
        break;
    case ($tijd >= 18 && $tijd < 24) :
        echo "het is avond";
        break;
}

//opdracht 3
echo "<br>";
$number1 = 10;
$number2 = 15;

if ($number1 > $number2) {
    echo "$number1 is groter dan $number2";
    echo "<br>";
    $result1 = $number1 * 2;
    $result2 = $result1 + $number2;
    echo "uitkomst is: $result2";
} elseif ($number2 > $number1) {
    echo "$number2 is groter dan $number1";
    echo "<br>";
    $result1 = $number2 * 2;
    $result2 = $result1 + $number1;
    echo "uitkomst is: $result2";
}
echo "<br>";
//opdracht4
$price = 100;

if ($price >= 150) {
    $result3 = $price * 1.19;
    echo "oude prijs: $price. na verhoging van 19% is de prijs: $result3";
} elseif ($price < 55) {
    $result3 = $price * 1.11;
    echo "oude prijs: $price. na verhoging van 11% is de prijs: $result3";
} elseif ($price >= 55 && $price < 150) {
    $result3 = $price * 1.16;
    echo "oude prijs: $price. na verhoging van 16% is de prijs: $result3";
}
echo "<br>";

//opdracht 5
$number = 25;

if ($number % 2 == 0) {
    echo "$number het is even.";
} else {
    echo "$number het is niet even.";
}
echo "<br>";

//opdracht 6
//var_dump($tijd);
$temp = 15;
$air = 70;
$hour = 17;

if ($tijd >= 17 && $temp <= 20 && $air <= 85) {
    echo "het is $tijd,$temp &$air = airco moet uit";
}
echo "<br>";
//opdracht7

$spaargeld = 950;

if ($spaargeld >= 1000) {
    echo "je hebt genoeg en mischien kan je ook een hoesje kopen. je totaal is: $spaargeld";
} elseif ($spaargeld < 750) {
    echo "je hebt tweinig geld en je bent er nog niet dus je moet een bij baantje kopen. je totaal is: $spaargeld";
} elseif ($spaargeld >= 750) {
    echo "je bent er bijna maar nog niet helemaal. je totaal is: $spaargeld";
}
echo "<br>";

//opdracht8
$age = 17;
$stempas = false;
if ($age >= 16) {
    echo "je mag scooterrijbewijs halen <br>";

}
if ($age >= 18) {
    echo "je bent oud genoeg om te stemmen ";
    if ($stempas) {
        echo "Je mag stemmen. want je hebt een stempas!";
    } else {
        echo "maar je mag niet stemmen want je heb geen stem pas";
    }
} else {
    echo "je bent nog niet 18 dus je mag niet stemmen";
}
echo "<br>";

//opdracht 9
$side1 = 2;
$side2 = 2;
$side3 = 1;
if (($side1 + $side2 > $side3) && ($side1 + $side3 > $side3) && ($side2 + $side3 > $side1)) {
    echo "zijde 1: $side1 <br>zijde 2: $side2 <br>zijde 3: $side3 <br> je kan een driehoek maken";
} else {
    echo "zijde 1: $side1 <br>zijde 2: $side2 <br>zijde 3: $side3 <br> je kan geen driehoek maken";
}
echo "<br>";

// opdracht 10
$number10 = 5;
$total = 0;
echo "waarde van veriabele number is: $number10 <br>";
echo "Optelling is als volgt: <br>";
for ($i = 1; $i <= $number10; $i++) {
    $total += $i;
    if ($i == 1) {
        echo "$i";
    } else {
        echo " + $i";
    }
}
echo " = $total";
echo "<br>";

// opdracht 11
$getal = 5;
$faculteit = 1;
for ($i = 1; $i <= $getal; $i++) {
    $faculteit *= $i;
}
echo "De faculteit van $getal is $faculteit";
echo "<br>";

//opdracht zonder loop 13
//$mile1 = 1;
//$kilometers = $mile1 * 1.60934;
//echo "$mile1 = $kilometers ";
//$mile2 = 2;
//$kilometers = $mile2 * 1.60934;
//echo "$mile2 = $kilometers ";

//opdracht met loop 13
$start = 1;
$end = 10;
echo "m = km <br>";
for ($miles = $start; $miles <= $end; $miles++) {
    $kilometers = $miles * 1.609;
    echo "$miles = $kilometers <br>";
}
echo "<br>";

//opdracht 15
echo "<h1>patroon 1</h1>";
$numbers = "";
for ($i = 1; $i <= 6; $i++) {
    $numbers .= $i . " ";
    echo $numbers . "<br>";
}

echo "<h1>patroon 2</h1>";
$numbers = "";
for ($i = 1; $i <= 6; $i++) {
    $numbers .= $i . " ";
    echo $numbers . "<br>";
}

echo "<h1>patroon 3</h1>";
$numbers = "";
for ($i = 1; $i <= 6; $i++) {
    $numbers .= $i . " ";
    echo $numbers . "<br>";
}

echo "<h1>patroon 4</h1>";
$numbers = "";
for ($i = 1; $i <= 6; $i++) {
    $numbers .= $i . " ";
    echo $numbers . "<br>";
}
?>


