<?php


class Bank                   //Crer une classe appelée Bank. Une classe est comme un modèle (ou un plan) pour créer des objets.
{

    private float $balance;          //la variable $balance représente le solde du compte 
                                    //private indique que la variable n'est accessible que depuis la classe Bank
                                   //float indique que la variable sera un nombre décimal


    public function __construct(){    //Méthode appelée automatiquement quand on crée un nouvel objet
      $this->balance = 0;             // initialisation du solde à 0
    }

    public function getBalance(){   // Comme $balance est private , on utilise une méthode publique pour y accéder 
        return $this->balance;      //Permet de récupérer le solde
    }



    public function deposit($amount){      
        $this->balance += $amount;                                     //Ajoute $amount au solde
        echo "Dépot de $amount. Nouveau solde: $this->balance <br>";
    }

    public function withdraw($amount){
        if ($this->balance >= $amount){                               //Vérifie s'ily a assez d'argent
            $this->balance -= $amount;                                //Si oui => soustrait  le montant
            echo "Retrait de $amount. Solde : $this->balance <br>";
        }
    }
}

$compte = new Bank;       //création d'un objet Bank

// Appels des méthodes
$compte->deposit(500);
$compte->withdraw(100);
$compte->withdraw(50);


?>