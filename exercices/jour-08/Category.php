<?php

class Category 
{
    public function __construct( 
        public string $id,
        public string $nom,
        public string $description,
    ){}


    //La méthode getSlug() transforme le nom de la catégorie en un format compatible avec les URL.
    public function getSlug() : string
    {
        return str_replace(' ','-', strtolower($this->nom));
    }
}

//création de 3 objets
$cat1 = new Category( 1, "Informatique", "Clavier, souris, écran",);
$cat2 = new Category( 2, "Déssin", "Papier, crayon, Gomme",);
$cat3 = new Category( 3, "Chat", "Manger, litière, dormir",);

//affichage 
echo $cat1->getSlug() . "<br>";
echo $cat2->getSlug() . "<br>";
echo $cat3->getSlug() . "<br>";

?>