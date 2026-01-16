<?php
$a = "5";
$b = 3;
$c = $a + $b;

var_dump($a);      // affiche string car 5 est entre "" c'est donc une chaîne de caractère
var_dump($b);      // affiche int 
var_dump($c);      // un string additionné à un int donne un int

$price = "29.99€";        // c'est un string au lieu d'un float et il y a le symbole euro
$result = $price + 10;
var_dump($result);       // celà affiche float(39.99) car PHP ignore le symbole euro et convertit le string en float pour faire l'addition

?>