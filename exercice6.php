<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée ShoppingCart avec les propriétés 
 * - items (sous forme de tableau)
 * - total.
 * Implémentez une méthode pour ajouter des articles au panier 
 * (chaque article sera dans un tableau avec name et price) 
 * Implémentez une méthode pour afficher tous les items.
 * Implémentez une méthode pour calculer le coût total.
 * En dessous de la classe, créer un objet et appeler vos méthodes
 */
require_once "exercice1.php";
class ShoppingCart {
    protected array $items = [];
    protected float $total;

    public function __construct()
    {
        $this->total = 0;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function setItems(array $items): self
    {
        $this->items = $items;

        return $this;
    }

    public function getTotal(): float
    {
        return $this->total;
    }

    public function setTotal(float $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function addArticle(Product $item): void{
        $produitArray = array("name" => ($item->getName()), "price" => ($item->getPriceWithVat()));
        array_push($this->items, $produitArray);
        $this->setTotal($this->getTotal() + $produitArray["price"]);
    }

    public function showCart(): String{
        $produits = "";
        for ($i = 0, $size = count($this->items); $i < $size; ++$i) {
            $produits = $produits  . $this->items[$i]["name"] . "<br>";
        }
        return $produits;
    }

}

$cart = new ShoppingCart();
$cart->addArticle($produit);
$cart->addArticle($produit);
$cart->addArticle($produit2);
echo $cart->showCart();
echo "total : ". $cart->getTotal();