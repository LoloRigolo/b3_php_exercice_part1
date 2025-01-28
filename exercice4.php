<?php

/**
 * ÉNONCÉ
 * Créez une classe Article ayant les propriétés 
 * title (titre)
 * content (contenu)
 * Implémentez une méthode getSummary($maxLength) qui retourne les premiers $maxLength caractères 
 * du contenu, suivis de « … » si le contenu est trop long.
 * En dessous la classe instancier un objet et afficher les infos

 */

 class Article {
    protected string $title;
    protected string $content;


    public function __construct(string $title, string $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function getSummary(int $maxLength): string{
        $value = $this->title . "<br>";
        if (strlen($this->content) > $maxLength)
            $value = $value . substr($this->content, 0, $maxLength) . "...";
        else
            $value = $value . $this->content;
        return $value;
    }
 }

 $article = new Article("L'article de Lolo", "Voici mon article il fait 40 caractères");
 echo $article->getSummary(39);