<?php


//Créer une classe
class Car{
    // Propriétés (les données)

    public function __construct(
    
    public string $brand,
    public string $model,
    public int $year,
    ){}
    
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
$car = new Car("Voiture", "Qui roule", 2007);
$car1 = new Car("Voiture", "Qui roule vite", 2005);
$car2 = new Car("Voiture", "Qui roule très vite", 2024);

$car->getAge();
echo"<br>";
$car->display();
echo"<br>";

$car1->display();

echo"<br>";
$car2->display();
echo"<br>";

?>