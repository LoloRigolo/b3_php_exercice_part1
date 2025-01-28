<?php

/**
 * ÉNONCÉ :
 * Importer le fichier de l'exercice2 pour avoir accès à la classe Person
 * Écrivez une classe nommée Employee qui hérite de la classe Person
 * et ajoute les propriétés salary et position.
 * Surchager le constructeur et appeler le constructeur parent
 * Surcharger la méthode afficheInfos() pour afficher le salaire et le poste
 * En dessous la classe instancier un objet et afficher les infos
 */


require_once "exercice2.php";
class Employee extends Person
{
    private String $position;
    private String $company;

    public function __construct(string $firstName, string $lastName, int $age, string $position, string $company)
    {
        parent::__construct($firstName, $lastName, $age);
        $this->position = $position;
        $this->company = $company;
    }

    public function getPosition(): String
    {
        return $this->position;
    }

    public function setPosition(String $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getCompany(): String
    {
        return $this->company;
    }

    public function setCompany(String $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function afficheInfos(): string
    {
        return parent::getFullName() . ", il est " . $this->position . " de " . $this->company;
    }
}
echo "<br>";
$lorenzo3 = new Employee("Lorenzo3", "Cesana-Rale", 21, "CEO", "LoloCorp");
echo $lorenzo3->afficheInfos();