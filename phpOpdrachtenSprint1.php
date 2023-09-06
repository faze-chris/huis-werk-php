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

?>

