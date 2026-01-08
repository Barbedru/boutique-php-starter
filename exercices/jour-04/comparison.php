<?php
$a = 0;
$b = "";
$c = null;
$d = false;
$e = "0";

// == regarde la Valeur
var_dump($a == $b);   //false     car valeur défférente
var_dump($a == $c);   //true      car valeur égal
var_dump($a == $d);   //true      car null = à "tout"
var_dump($a == $e);   //true      car il converti un int en string


// === regarde la valeur ET le Type
var_dump($a === $b);   //false   car ce n'est pas le même type
var_dump($a === $c);   //false   car ce n'est pas le même type
var_dump($a === $d);   //false   car ce n'est pas le même type
var_dump($a === $e);   //fasle   car ce n'est pas le même type
?>