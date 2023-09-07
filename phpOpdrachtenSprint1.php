<?php
//opdracht 1
$tijd = date("H");

if ($tijd >= 6 && $tijd < 12 ){
    echo "het is ochtend";
}elseif ($tijd >= 12 && $tijd < 18){
    echo "het is middag";
}elseif($tijd >= 18 && $tijd <24){
    echo "het is avond";
}

//opdracht 2
echo "<br>";
switch($tijd){
      case ($tijd >= 6 && $tijd < 12 ) :    echo "het is ochtend";  break;
      case ($tijd >= 12 && $tijd < 18) :    echo "het is middag";  break;
      case ($tijd >= 18 && $tijd <24) :     echo "het is avond";  break;
}

//opdracht 3
echo "<br>";
$number1 = 10;
$number2 = 15;

if ($number1 > $number2){
    echo "$number1 is groter dan $number2";
    echo "<br>";
    $result1 = $number1* 2;
    $result2 = $result1 + $number2;
    echo "uitkomst is: $result2";
}elseif ($number2 > $number1){
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
}elseif ($price < 55){
    $result3 = $price  * 1.11;
    echo "oude prijs: $price. na verhoging van 11% is de prijs: $result3";
}elseif ($price >= 55 && $price <150){
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

if ($tijd >=17 && $temp <=20 && $air <= 85){
    echo "het is $tijd,$temp &$air = airco moet uit";
}
echo "<br>";
//opdracht7

$spaargeld = 950;

if ($spaargeld >=1000){
    echo "je hebt genoeg en mischien kan je ook een hoesje kopen. je totaal is: $spaargeld";
}elseif ($spaargeld <750){
    echo "je hebt tweinig geld en je bent er nog niet dus je moet een bij baantje kopen. je totaal is: $spaargeld";
}elseif ($spaargeld >=750){
    echo "je bent er bijna maar nog niet helemaal. je totaal is: $spaargeld";
}
echo "<br>";

//opdracht8
$age = 17;
if ($age >= 16){
    echo "je mag scooterrijbewijs halen";
}
?>


