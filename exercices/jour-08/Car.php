<?php


//Créer une classe
class Car{
    // Propriétés (les données)
    public string $brand;
    public string $model;
    public int $year;
    
    // Méthode (le comportement)
    public function display(): void
    {
        echo "$this->brand : $this->model : $this->year";
    }

    public function getAge(): void{
        echo"$this->year";
    }
}

//Instancier un objet
//Instancier = créer une instance (un exemplaire) d'une classe.
//On peut créer plusieurs objets (instances) d'une même classe.
//L'objet est créé avec le mot-clé new et est stocké dans une variable.
//Ses propriétés et méthodes sont accessibles avec -> et peuvent être modifiées indépendamment.
$Car = new Car();
$Car->brand = "Voiture";
$Car->model = "Qui roule";
$Car->year = 2007;

$Car->getAge();
echo"<br>";
$Car->display();

?>