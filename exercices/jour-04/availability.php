<?php

$stock=18;
$active=true;
$date = new DateTime('today');                     // variable => date du jour
$promoEndDate = new DateTime('2026-01-29') ;      // variable => date de fin de promo

if ($stock > 0 && $active === true){
        echo "In Stock";
}  
else{
        echo "Out of Stock";
}



if ($promoEndDate >= $date){ 
     echo "PROMOTION !";
}

?>
