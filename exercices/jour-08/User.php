<?php
//Le constructeur est une méthode spéciale qui s'exécute automatiquement lors de la création d'un objet avec new.
//Son rôle principal est d'initialiser les propriétés de l'objet.
//Garantit la cohérence : Un objet est toujours créé avec toutes ses données nécessaires
//Simplifie l'instanciation : Une seule ligne au lieu de plusieurs affectations
//Valide les données : Peut vérifier que les valeurs sont correctes à la création
//Valeurs par défaut : Peut définir des paramètres optionnels



class User
{   // Propriétés (les données)
    public function __construct(
        public string $name,
        public string $email,
        public DateTime $registrationDate,
    ) {}

    // Méthode (le comportement)
    // Affichage des infos utilisateur
    public function display(): void
    {
        echo $this->name . " : " .
             $this->email . " : " .
             $this->registrationDate->format('Y-m-d') . "<br>";
    }

    // Vérifie si l'utilisateur est nouveau (moins de 30 jours)
    public function isNewMember(): bool
    {
        $today = new DateTime();
        $timeDiff = $this->registrationDate->diff($today);
        return $timeDiff->days < 30;
    }
}


// Création des utilisateurs
$user1 = new User("Dustin", "dustin.a@hawkings.com", new DateTime("2025-08-02"));
$user2 = new User("Max", "max.m@hawkings.com", new DateTime("2026-01-01"));


// Affiche résultat (avec condition ternaire (? :) )
$user1->display();
echo $user1->isNewMember() ? "Nouvel utilisateur" : "" , "<br>";

$user2->display();
echo $user2->isNewMember() ? "Nouvel utilisateur" : "";
