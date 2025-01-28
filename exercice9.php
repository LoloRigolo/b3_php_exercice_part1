<?php

/**
 * ÉNONCÉ:
 * Créez une classe Movie avec les propriétés 
 * title, genre et ageRestriction. 
 * Ajoutez une méthode canWatch($viewerAge) qui retourne true 
 * si l’âge du spectateur ($viewerAge) est supérieur ou égal à ageRestriction, 
 * sinon false.
  * En dessous de la classe, créer un objet et appeler les méthodes
 */


class Movie {
    protected string $title;
    protected string $genre;
    protected int $ageRestriction;

    public function __construct(string $title, string $genre,int $ageRestriction)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->ageRestriction = $ageRestriction;
    }

    

    /**
     * Get the value of title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of genre
     */
    public function getGenre(): string
    {
        return $this->genre;
    }

    /**
     * Set the value of genre
     */
    public function setGenre(string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get the value of ageRestriction
     */
    public function getAgeRestriction(): int
    {
        return $this->ageRestriction;
    }

    /**
     * Set the value of ageRestriction
     */
    public function setAgeRestriction(int $ageRestriction): self
    {
        $this->ageRestriction = $ageRestriction;

        return $this;
    }

    public function canWatch(int $age): String
    {
        if($age >= $this->getAgeRestriction())
            return "You can watch this movie";
        return "You cannot watch this movie";
    }
}

$film = new Movie("Pulp Fiction", "Thriller", 18);
echo "17ans " . $film->canWatch(17) . "<br>";
echo "18ans " . $film->canWatch(18) . "<br>";
echo "20ans " . $film->canWatch(20) . "<br>";

