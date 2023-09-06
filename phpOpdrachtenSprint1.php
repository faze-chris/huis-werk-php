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
?>