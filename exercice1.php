<?php
/*
 * ÉNONCÉ :
 * Créer Product avec les propriétés suivantes en protected
 * - name
 * - price_without_tax
 * - vat_rate
 * Ajouter les getters et setters
 * Ajouter une methode getPriceWithVat() qui va retourner le calcul du prix TTC
 * En dessous la classe instancier un produit et afficher les infos
*/

class Product {
    protected string $name;
    protected float $price_without_tax;
    protected float $vat_rate;
    
    public function __construct(string $name, float $price_without_tax, float $vat_rate)
    {
        $this->name = $name;
        $this->price_without_tax = $price_without_tax;
        $this->vat_rate = $vat_rate;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of price_without_tax
     */
    public function getPriceWithoutTax(): float
    {
        return $this->price_without_tax;
    }

    /**
     * Set the value of price_without_tax
     */
    public function setPriceWithoutTax(float $price_without_tax): self
    {
        $this->price_without_tax = $price_without_tax;

        return $this;
    }

    /**
     * Get the value of vat_rate
     */
    public function getVatRate(): float
    {
        return $this->vat_rate;
    }

    /**
     * Set the value of vat_rate
     */
    public function setVatRate(float $vat_rate): self
    {
        $this->vat_rate = $vat_rate;

        return $this;
    }
    
    public function getPriceWithVat(): float {
        return $this->price_without_tax + ($this->vat_rate * $this->price_without_tax);
    }

}

$produit = new Product("yaourt", 9.9, 0.2);
echo "prix TTC :" . $produit->getPriceWithVat();