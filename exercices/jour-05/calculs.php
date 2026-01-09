<?php

function calculatedVAT($priceExcludingTax, $rate){
    return $priceExcludingTax * $rate / 100;
}

function calculatedIncludingTax($priceExcludingTax, $rate){
    return $priceExcludingTax + $rate;
}

function calculatedDiscount($price, $percentage){
    return $total = $price * (1 - $percentage / 100);
}

$price = 100;
echo "Le Prix HT : $price €  <br/>";

$price = calculatedVAT (100, 20);
echo "La TVA est de $price %  <br/> "; 

$price = calculatedIncludingTax(100, 20);
echo "Le prix TTC est de $price €  <br> ";

$remise = 10;
echo "La remise et de $remise %  <br/>";

$total = calculatedDiscount (120,10);
echo "La remise est de $total €  <br/>";

?>

