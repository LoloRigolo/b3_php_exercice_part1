<?php 

/*
 * ÉNONCÉ:
 * Créez une classe BankAccount avec la propriété balance (solde). 
 * Ajoutez des méthodes deposit($amount) pour déposer de l’argent et withdraw($amount) 
 * pour retirer de l’argent (si le solde est suffisant). 
 * Affichez un message lors de chaque opération.
 * En dessous de la classe, créer un objet et appeler les méthodes
*/

class BankAccount {
    protected float $balance;
     public function __construct(float $balance)
     {
        $this->balance = $balance;
     }
    
    public function getBalance(): float
    {
        return $this->balance;
    }

    public function setBalance(float $balance): self
    {
        $this->balance = $balance;

        return $this;
    }

    public function deposit(float $amount): String
    {
        $this->setBalance($this->getBalance() + $amount);
        return "Un montant de " . $amount . " a été ajouté au compte <br>New Balance " . $this->getBalance() . "<br>";
    }
    public function withdraw(float $amount): String
    {   if ($this->getBalance() >= $amount){
            $this->setBalance($this->getBalance() - $amount);
            return "Un montant de " . $amount . " a été retiré du compte <br>New Balance " . $this->getBalance() . "<br>";
        }
        else
            return "solde insuffisant ". "<br>";
    }
}

$account = new BankAccount(100);
echo $account->deposit(10.1);
echo $account->withdraw(9.9);
echo $account->withdraw(200);
