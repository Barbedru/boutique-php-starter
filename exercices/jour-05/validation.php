<?php


function isInStock($stock){
    if ($stock > 0){
        return "true";
    }
    else{
        return "false";
    }
    
}
$stock = isInStock (10);
echo "Le stock est de $stock <br>";


function isOnSale($discount){
    if ($discount > 0){
        return "true";
    }
    else{
        return "false";
    }
}
$discount = isOnSale (3);
echo "En promotion $discount  <br>";



function isNew($dateAdded){
    $daysSince = (time() - strtotime($dateAdded)) / 86400;
    if ($daysSince < 30){
        return "true"; 
    }
    else{
        return "false";
    }

}
$dateAdded = "2025-01-01";
echo "Nouveau " . isNew($dateAdded) ;
echo "<br>";

function canOrder($stock, $quantity){
    if ($stock >= $quantity){
       return "true";
   }
   else {
    return "false";
   } 
    
}
$order = canOrder(6 , 10);
echo "Commande possible $order";

?>

