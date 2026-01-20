<?php

class Product
{   // Propriétés (les données)
    public function __construct(
        public string $id,
        public string $name,
        public string $description,
        private float $price,
        public float $stock,
        public string $category,
    ) {}

    public function getPrice(): float
    {
        return $this->price;
    }

    //Méthode pour calculer la taxe, ici 20%
    public function getPriceIncludingTax(float $vat = 20): float
    {
        return $this->price * (1 + $vat / 100);
    }

    //Méthode pour vérifier le stock
    public function isInStock(): bool
    {
        return $this->stock > 0;
    }

    //Méthode pour réduire le stock
    public function reduceStock(int $quantity): void
    {
        if ($quantity <= $this->stock) {
            $this->stock -= $quantity;
        } else {
            echo "Stock insuffisant <br>";
        }
    }

    //Méthode pour calculer la réduction
    public function applyDiscount(float $percentage): void
    {
        $discount = $this->price * ($percentage / 100);
        $this->price -= $discount;
    }


    //Méthode d'affichage 
    public function display(): void
    {
        echo "Identifiant produit : $this->id  <br>
              Nom du produit : $this->name  <br>
              Description : $this->description <br>
              Catégorie : $this->category <br>
              Prix HT : " . $this->getPrice() . " € <br>
              Prix TTC : " . $this->getPriceIncludingTax() . " € <br>
              Solde - 20% : " . $this->applyDiscount(20) . $this->getPrice() . " € <br>
              Stock : " . $this->reduceStock(5) .  $this->stock . "<br>";
    }
}


$product = new Product(
    "01",
    "Cours php",
    "Un vrai plaisir",
    1200,
    10,
    "Documentations"
);

$product1 = new Product(
    "02",
    "Aspirine",
    "Une aide précieuse",
    7.99,
    13,
    "Médicaments"
);

$product2 = new Product(
    "03",
    "Corde",
    "Objet de qualité supérieur",
    15,
    0,
    "Accessoires"
);

$product->display();
echo "<br>";
$product1->display();
echo "<br>";
$product2->display();

//echo "Identifiant produit :" . " " . $product->id . "<br>";
//echo "Nom du produit :" . " " . $product->name . "<br>";
//echo "Description :" . " " . $product->description . "<br>";
//echo "Catégorie :" . " " . $product->category . "<br>";
//echo "Prix HT :" . " " . $product->getPrice() . " €<br>";
//echo "Prix TTC :" . " " . $product->getPriceIncludingTax() . " €<br>";
//echo "Solde -10% :" . " " . $product->applyDiscount(10) . $product->getPrice() . " €<br>";
//echo "Stock :" . " " . $product->reduceStock(5) . $product->stock . "<br><br>";

//echo "Identifiant produit :" . " " . $product1->id . "<br>";
//echo "Nom du produit :" . " " . $product1->name . "<br>";
//echo "Description :" . " " . $product1->description . "<br>";
//echo "Catégorie :" . " " . $product1->category . "<br>";
//echo "Prix HT :" . " " . $product1->getPrice() . " €<br>";
//echo "Prix TTC :" . " " . $product1->getPriceIncludingTax() . " €<br>";
//echo "Solde -5% :" . " " . $product1->applyDiscount(5) . $product1->getPrice() . " €<br>";
//echo "Stock :" . " " . $product1->reduceStock(10) . $product1->stock . "<br><br>";

//echo "Identifiant produit :" . " " . $product2->id . "<br>";
//echo "Nom du produit :" . " " . $product2->name . "<br>";
//echo "Description :" . " " . $product2->description . "<br>";
//echo "Catégorie :" . " " . $product2->category . "<br>";
//echo "Prix HT :" . " " . $product2->getPrice() . " €<br>";
//echo "Prix TTC :" . " " . $product2->getPriceIncludingTax() . " €<br>";
//echo "Solde -75% :" . " " . $product2->applyDiscount(75) . $product2->getPrice() . " €<br>";
//echo "Stock :" . " " . $product2->reduceStock(10) . $product2->stock . "<br>";