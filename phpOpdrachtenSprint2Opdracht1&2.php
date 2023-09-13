<?php
session_start();

//opdracht1
$_SESSION['visit'] += 1;
if(isset($_SESSION['visit'])){
    echo "deze pagina heb je al: ".$_SESSION['visit']. " keer bekeken <br> voordat je de internet browser hebt afgesloten.";
}
echo "<br>";

//opdracht 2
setcookie("username", "mondriaan", time() + 3600);

if (isset($_COOKIE['username'])){
    echo $_COOKIE['username'];
}




echo "<br>";

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
if (isset($_COOKIE['username'])){
    echo $_COOKIE['username'];
}
?>