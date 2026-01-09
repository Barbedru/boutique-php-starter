<?php 
    
function formatPrice($amount, $currency = "€", $decimals = 2){
    return number_format($amount , $decimals , "," , " ") . $currency;
}

$test = formatPrice(99.999);
echo "$test <br>";

$test = formatPrice(99.999, "$");
echo "$test <br>";

$test = formatPrice(99.999, "€",0);
echo "$test <br>";

?>
