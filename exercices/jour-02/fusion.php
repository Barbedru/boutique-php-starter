<?php

$clothes = ["T-shirt", "Jeans", "Pull"];

$accessories = ["Ceinture", "Montre","Lunettes"];

$catalogue = array_merge($clothes , $accessories);     // Fusionne les deux tableaux
array_unshift($catalogue , "Chapeau" );             // Ajoute "Chapeau" au début du tableau

print_r($catalogue);

echo count($catalogue);                               // Affiche 6    

?>