<?php
session_start();
//
////opdracht1
$_SESSION['visit'] += 1;
if (isset($_SESSION['visit'])) {
    echo "deze pagina heb je al: " . $_SESSION['visit'] . " keer bekeken <br> voordat je de internet browser hebt afgesloten.";
}
echo "<br>";

////opdracht 2
setcookie("visit", 1, time() + 3600);
if (isset($_SESSION['visit'])) {
    $_SESSION['visit'] += 1;
} else {
    $_SESSION['visit'] = 1;
}

if (isset($_COOKIE['total_visits'])) {
    echo "cookie bestaat <br>";
    $total_visits = $_COOKIE['total_visits'] + 1;
} else {
    echo "cookie bestaat niet";
    $total_visits = 1;
}

setcookie('total_visits', $total_visits, 0);
echo "Deze pagina heb je al: " . $_SESSION['visit'] . " keer bekeken.<br>";
echo "In totaal heb je deze website al: " . $total_visits . " keer bezocht.";
echo "<br>";

//opdracht3
function generateRandomCode()
{
    $number = rand(1000, 9999);
    $length = 2;
    $string = '';
    for ($i = 0; $i < $length; $i++) {
        $randomNumber = rand(0, 25);
        $randomString = chr(65 + $randomNumber);
        $string .= $randomString;
    }
    return $number . $string;
}

$randomCode = generateRandomCode();
echo "$randomCode";
echo "<br>";

//opdracht4
function keerSom1($num1, $num2)
{
    return $num1 * $num2;
}

function keerSom2($num1, $num2)
{
    return $num1 * $num2;
}

$resultOpdracht4_1 = keerSom1(10, 3.14159);
$resultOpdracht4_2 = keerSom2(25, 3.14159);

echo round($resultOpdracht4_1, 1);
echo "<br>";
echo round($resultOpdracht4_2, 1);
echo "<br>";

//opdracht5

$V = 50;
$A = 5.5;
$S = 50;

function speed($s, $a)
{
    
}


//string functions
function addStrings(string $string1, string $string2 = " world"): string
{
    $result = $string1 . $string2;
    return $result;
}

echo addStrings(string1: "hello", string2: " frisbee");
echo "<br>";

//array functions
$cars = array();
$cars[] = "mustang";
$cars[] = "ferrerari";
$cars[] = "mercedes";
array_pop($cars);
print_r($cars);
echo count($cars);

//array string functions
$string = "dit is een string";
$stringArray = explode(".", $string);
echo "<br>";
print_r($stringArray);

echo "<br>";

// iets anders
$string11 = "dit is een string";
echo strlen($string11);
$string11 = str_replace("een", "geen", $string11);
echo $string11;
echo "<br>";

//anders
$_SESSION['name'] = "lemmen";
echo $_SESSION['name'];

//cookies aanmaken
if (isset($_COOKIE['username'])) {
    echo $_COOKIE['username'];
}
?>