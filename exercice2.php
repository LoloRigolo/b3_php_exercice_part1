<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée Person avec des propriétés first_name, last_name et age en protected.
 * Ajouter un conctructeur
 * Ajouter les getters et setters
 * Implémentez une methode afficheInfos() pour afficher les informations de la personne.
 * Créer un nouvel objet et afficher les information
 */

 class Person {
    protected String $FirstName;
    protected String $LastName;
    protected Int $age;

    public function __construct($FirstName, $LastName, $age)
    {
        $this->FirstName = $FirstName;
        $this->LastName = $LastName;
        $this->age = $age;
    }

    public function getFullName(): String 
    {
        return $this->FirstName . " " . $this->LastName;
    }

    public function afficheInfos () :  String 
    {
        return $this->getFullName() . " a " . $this->age . " ans";    
    }

    public function getFirstName(): String
    {
        return $this->FirstName;
    }

    public function setFirstName(String $FirstName): self
    {
        $this->FirstName = $FirstName;

        return $this;
    }

    public function getLastName(): String
    {
        return $this->LastName;
    }


    public function setLastName(String $LastName): self
    {
        $this->LastName = $LastName;

        return $this;
    }


    public function getAge(): Int
    {
        return $this->age;
    }

    public function setAge(Int $age): self
    {
        $this->age = $age;

        return $this;
    }
}


$lorenzo = new Person("Lorenzo", "Cesana-Rale", 21);
echo $lorenzo->afficheInfos();