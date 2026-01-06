<?php
$groceries = array("Apples", "Bananas", "Carrots", "Kiwis", "Lemons");
 
array_push($groceries, "Oranges" , "Cherries");             // Ajoute "Oranges" et "Cherries" à la fin du tableau   

unset($groceries[2]);                                      // Supprime "Carrots" du tableau

var_dump($groceries);                                     // Affiche la structure complète du tableau

echo $groceries[1];                                      //Bananas

echo count($groceries);                                 // Affiche le nombre d'articles => 5
                                                   

?>