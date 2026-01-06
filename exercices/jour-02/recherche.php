<?php
$categories = ["Vêtements" , "Chaussures" , "Accessoires" , "Sport" ];

if (in_array("Chaussures" , $categories)) {
    echo "Trouvé !";
} else {
    echo "Non trouvé";
}

array_search("Sport" , $categories);
echo array_search("Sport" , $categories); // Affiche 3, l'index de "Sport"

?>