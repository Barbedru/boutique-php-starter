<?php
$brand = "Nike";
$model = "Air Max";

echo "Chaussure " . $brand . " " . $model . ".";
echo "Chaussure $brand $model.";

$format = "Chaussure %s %s.";
echo sprintf($format, $brand, $model);

$price = 99.99;
echo "Prix : $price €";  // La variable variable est interprétée.
echo 'Prix : $price €';  // La variable $var n'est pas interprétée.
?>