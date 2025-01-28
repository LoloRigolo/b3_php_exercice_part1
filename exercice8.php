<?php

/**
 * ÉNONCÉ:
 * Créez une classe Student qui étend Person et ayant pour propriétés 
 * - grades (tableau de notes).
 * Ajoutez une méthode getAverage() qui retourne la moyenne des notes. 
 * Implémentez les getters et setters pour manipuler le tableau de notes.
 * En dessous de la classe, créer un objet et appeler les méthodes
 */

 class Student {
    protected array $grades;

    public function __construct(array $grades)
    {
        $this->grades = $grades;
    }

    public function getGrades(): array
    {
        return $this->grades;
    }

    public function setGrades(array $grades): self
    {
        $this->grades = $grades;

        return $this;
    }

    public function getAverage(): float 
    {
        $average = 0;
        $nbr = 0;
        $array = $this->getGrades();
        foreach ($array as &$grade) {
            $average += $grade;
            $nbr ++;
        }
        return $average/$nbr;
    }
 }

 $arrayGrades = array(1, 20);
 $Lorenzo = new Student($arrayGrades);
 echo $Lorenzo->getAverage();