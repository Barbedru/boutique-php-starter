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
$sweat = new Product(1,"Sweat", 45.99, $vetements);
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


echo "<br>";
?>
//---------------------EXERCICE-02 : Classe CartItem-------------------//
<?php

echo "<br>";

class CartItem
{
    function __construct(
        private Product $product,
        private int $quantite = 1       //le nombre d’unités (par défaut = 1
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

echo "<br>";
?>

//---------------------EXERCICE-03 : Classe Cart----------------------//

<?php

class Cart
{

    private array $items = [];

    public function add(Product $product, int $quantity = 1): void
    {
        $id = $product->getId();

        if (isset($this->items[$id])) {
           
            $currentQuantity = $this->items[$id]->getQuantity();              
            $this->items[$id]->setQuantity($currentQuantity + $quantity);     // Produit déjà dans le panier → augmenter quantité
        } else {
            
            $this->items[$id] = new CartItem($product, $quantity);            // Nouveau produit
        }
    }

    public function remove(int $productId): void
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


$cart = new Cart();

$cart->add($sweat, 2);
$cart->add($chapeau, 1); 
$cart->add($pantoufle, 3);

echo "<br>";

foreach ($cart->getItems() as $item) {
    echo $item->getProduct()->getProdName();
    echo " x " . $item->getQuantity();
    echo " = " . $item->getTotal() . " €<br>";
}

echo "<br>";

echo "Article dans le panier : " . $cart->count() . "<br>";     //3
echo "<br>";

echo "Total panier : " . $cart->getTotal() . " €<br>";          //141.94€
echo "<br>";

echo "Retrait de l'article pantoufle <br>";   

$cart->remove($pantoufle->getId());
echo "Article dans le panier : " . $cart->count() . "<br>";     //2

echo "<br>";

echo "Total panier : " . $cart->getTotal() . " €<br>";          //111.97€

echo "<br>";

$cart->clear();
echo "Suppression du panier <br>";                                   
echo "Article dans le panier : " . $cart->count() . "<br>";    //0

echo "<br>";
?>

//---------------------EXERCICE-04 : User et Address----------------------//

<?php

class Address
{
    public function __construct(
        private string $rue,
        private string $ville,
        private string $codePostal,
        private string $pays
    ) {}

    public function getAddress(): string
    {
        return $this->rue . ", " . $this->ville . ", " . $this->codePostal . ", " . $this->pays;
    }
}
class User
{
    private array $addresses = [];                 //tableau d'adresses vide
    private ?Address $defaultAddress = null;       // ?Address permet de dire que la variable peut être objet Address ou null

    public function __construct(
        private string $nom,
        private string $email,
        private DateTime $dateInscription
    ) {}

    public function displayUser(): string
    {
        return "Nom: " . $this->nom . "<br>" .
               "Email: " . $this->email . "<br>" .  
               "Date d'inscription: " . $this->dateInscription->format('Y-m-d') . "<br>";
    }

    public function addAddress(Address $address, bool $isDefault = false): void        
    {
        $this->addresses[] = $address;                          //ajoute l'adresse au tableau
        if ($isDefault || $this->defaultAddress === null) {     //si isDefault est true ou si aucune adresse par défaut n'est définie
            $this->defaultAddress = $address;                   // alors => définit l'adresse comme adresse par défaut
        }
    }

    public function getAddresses(): array
    {
        return $this->addresses;
    }

    public function getDefaultAddress(): ?Address   // Retourne l'adresse par défaut ou null si aucune n'est définie
    {
        return $this->defaultAddress;
    }
}

echo "<br>";

$user = new User("Dupont", "dupont@example.com", new DateTime("2025-08-19"));

echo $user->displayUser() . "<br>";

$address1 = new Address("123 Rue de la Paix", "Paris", "75001", "France");
$address2 = new Address("456 Avenue des Champs-Élysées", "Paris", "75008", "France");

$user->addAddress($address1);
$user->addAddress($address2);

echo $user->getDefaultAddress()->getAddress() . "<br>";

echo "<br>";

?>

//---------------------EXERCICE-05 : Order ----------------------//

<?php

class Order
{
   

    private User $user;
    private array $items = [];
    private DateTime $date;
    private string $statut;

    public function __construct(Cart $cart, User $user)
    {
        $this->user = $user;
        $this->items = $cart->getItems();         // récupération des CartItem
        $this->date = new DateTime();             // date de création de la commande
        $this->statut = "";                       // statut par defaut 
        
    }


    public function getUser(): User
    {
        return $this->user;

    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function getDate(): DateTime
    {
        return $this->date;
    }

      public function getStatut(): string
    {
        return $this->statut;
    }

      public function setStatut(string $statut): void
    {
        $this->statut = $statut;
    }

    public function getTotal(): float
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getTotal();
        }
        return $total;
    }

    public function getItemCount(): int
    {
        $count = 0;
        foreach ($this->items as $item) {
            $count += $item->getQuantity();
        }
        return $count;
    }
}

echo "<br>";

$cart->add($sweat,1);
$cart->add($baskets,2);
$cart->add($pantalon,3);

$order = new Order($cart, $user);

echo "Commande de :" . $user->displayUser() . "<br>";

foreach ($order->getItems() as $item) {
    echo $item->getProduct()->getProdName();
    echo " x " . $item->getQuantity();
    echo " = " . $item->getTotal() . " €<br>";
}



echo"<br>";

echo "Nombre d'articles : " . $order->getItemCount() . "<br>";
echo "Total commande : " . $order->getTotal() . " €<br>";

$order->getDate();
echo "Date commande : " . $order->getDate()->format('Y-m-d H:i:s') . "<br>";

$order->setStatut("commande en préparation");
echo "Nouveau statut : " . $order->getStatut() . "<br>";

?>