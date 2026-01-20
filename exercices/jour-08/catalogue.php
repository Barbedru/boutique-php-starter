<?php

class Product {

    public function __construct(
        public string $name, 
        public float $price, 
        public float $stock
    ) {}


    //calcule la valeur totale en stock 
    //en multipliant son prix unitaire par la quantité.
    public function getValue() {
        return $this->price * $this->stock; 
    }
}

//création des objets
$product1 = new Product("Clavier", 30, 10);
$product2 = new Product("Souris", 20, 15);
$product3 = new Product("Écran", 150, 5);
$product4 = new Product("Casque", 50, 7);
$product5 = new Product("Webcam", 80, 4);

// Les produits sont stockés dans un tableau
$products = [$product1, $product2, $product3, $product4, $product5];

$totalStock = 0;
$totalValue = 0;

//Parcours du tableau
foreach ($products as $product){
    echo "Produit : $product->name, Prix : $product->price €, stock : $product->stock <br>";

    ////+= qui ajoute la valeur à la variable existante.
     $totalStock += $product->stock;      
     $totalValue += $product->getValue();

}

echo "Total stock : $totalStock <br>";
echo "Totale catalogue : $totalValue €";

?>