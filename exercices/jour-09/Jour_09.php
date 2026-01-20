//---------------------EXERCICE-01 : Porduct avec Category-------------------//
<?php

class Category
{
    public function __construct(
        private string $name
    ) {}

    //Méthode de récupération ici $name de Category
    public function getName(): string
    {
        return $this->name;
    }
}

class Product
{
    public function __construct(
        private int $id,
        private string $name,
        private float $price,
        private Category $category      //Mise en relation

    ) {}

    public function getId(): int
    {
        return $this->id;
    }

    //Méthode de récupération ici $category 
    public function getCategory(): Category
    {
        return $this->category;
    }

    //Méthode de récupération ici $name de Product
    public function getProdName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
//création d'objet categorie
$vetements = new Category("Vêtements");
$chaussures = new Category("Chaussures");
$accessoires = new Category("Accessoires");

//création d'objet produit
$sweat = new Product(1,"Sweat", 39.99, $vetements);
$pantalon = new Product(2,"Pantalon", 49.99, $vetements);
$baskets = new Product(3,"Baskets", 59.99, $chaussures);
$chapeau = new Product(4,"Chapeau", 19.99, $accessoires);
$lunettes = new Product(5,"Lunettes", 29.99, $accessoires);
$pantoufle = new Product(6,"Pantoufle", 9.99, $chaussures);


//Affichage
echo "<br>";
echo $sweat->getProdName() . " (" . $sweat->getCategory()->getName() . ") : " . $sweat->getPrice() . "€" . "<br>";
echo $pantalon->getProdName() . " (" . $pantalon->getCategory()->getName() . ") : " . $pantalon->getPrice() . "€" . "<br>";
echo $baskets->getProdName() . " (" . $baskets->getCategory()->getName() . ") : " . $baskets->getPrice() . "€" . "<br>";
echo $chapeau->getProdName() . " (" . $chapeau->getCategory()->getName() . ") : " . $chapeau->getPrice() . "€" . "<br>";
echo $lunettes->getProdName() . " (" . $lunettes->getCategory()->getName() . ") : " . $lunettes->getPrice() . "€" . "<br>";
echo $pantoufle->getProdName() . " (" . $pantoufle->getCategory()->getName() . ") : " . $pantoufle->getPrice() . "€" . "<br>";



?>
//---------------------EXERCICE-02 : Classe CartItem-------------------//
<?php

echo "<br>";

class CartItem
{
    function __construct(
        private Product $product,
        private int $quantite = 50       //le nombre d’unités (par défaut = 1
    ) {}

    public function getProduct(): Product
    {
        return $this->product;
    }

    public function getQuantity(): int
    {
        return $this->quantite;
    }

    public function setQuantity(int $quantite): void   //Méthode qui change la quantité
    {
        $this->quantite = max(1, $quantite);            // Empêche une quantité inférieur à 1
    }

    public function incremente($amount): void
    {
        $this->quantite += $amount;                    //Ajoute une quantité au panier
    }

    public function decremente($amount): void
    {
        $this->quantite = max(1, $this->quantite - $amount);       // Enlève une quantité            
    }

    public function getTotal(): float                //Calule le prix total de la ligne du panier
    {
        return $this->product->getPrice() * $this->quantite;
    }
}

$cartItem1 = new CartItem($sweat, 1);
$cartItem2 = new CartItem($pantalon, 2);
$cartItem3 = new CartItem($baskets, 3);


echo $cartItem1->getProduct()->getProdName() . " x1 = " . $cartItem1->getTotal() . " €" . "<br>";

$cartItem1->incremente(2);
echo "J'incremente de 2" . "<br>";

echo $cartItem1->getProduct()->getProdName() . " x3 = " . $cartItem1->getTotal() . " €" . "<br>" . "<br>";



echo $cartItem2->getProduct()->getProdName() . " x2 = " . $cartItem2->getTotal() . " €" . "<br>";

$cartItem2->incremente(1);
echo "J'incremente de 1" . "<br>";

echo $cartItem2->getProduct()->getProdName() . " x3 = " . $cartItem2->getTotal() . " €" . "<br>" . "<br>";



echo $cartItem3->getProduct()->getProdName() . " x3 = " . $cartItem3->getTotal() . " €" . "<br>";

$cartItem3->decremente(1);
echo "Je décremente de 1" . "<br>";

echo $cartItem3->getProduct()->getProdName() . " x3 = " . $cartItem3->getTotal() . " €" . "<br>";


?>

//---------------------EXERCICE-03 : Classe Cart----------------------//

<?php

class Cart
{

    private array $items = [];

    public function addProduct(Product $product, int $quantity = 1): void
    {
        $id = $product->getId();

        if (isset($this->items[$id])) {
           
            $currentQuantity = $this->items[$id]->getQuantity();              
            $this->items[$id]->setQuantity($currentQuantity + $quantity);     // Produit déjà dans le panier → augmenter quantité
        } else {
            
            $this->items[$id] = new CartItem($product, $quantity);            // Nouveau produit
        }
    }

    public function removeProduct(int $productId): void
    {
        unset($this->items[$productId]);
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function getTotal(): float
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getTotal();
        }
        return $total;
    }

    public function count(): int
    {
        return count($this->items);
    }

    public function clear(): void
    {
        $this->items = [];
    }
}


//Création du panier
$cart = new Cart();

//Ajout de produits
$cart->addProduct($sweat,2);
$cart->addProduct($pantalon,1);
$cart->addProduct($baskets,3);

//Afficher
foreach ($cart->getItems()as $item ){
    echo $item->getProduct()->getName();
    echo " x " . $item->getQuantity();
    echo " = " . $item->getTotal() . " €";

}

echo "Total : " . $scart->getTotal() . "€";



?>