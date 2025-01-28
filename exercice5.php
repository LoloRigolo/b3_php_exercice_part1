<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe nommée Math 
 * Ajouter les méthodes statiques add(), subtract() et multiply().
 * Utilisez ces méthodes pour effectuer des calculs mathématiques sur deux nombres.
 * En dessous de la classe, appeler chaque méthode
 */

 class Math {
    public static function add(float $num1, float $num2): float{
        return $num1 + $num2;
    }
    public static function subtract(float $num1, float $num2): float{
        return $num1 - $num2;
    }
    public static function multiply(float $num1, float $num2): float{
        return $num1 * $num2;
    }
 }

 echo "add : " . Math::add(1, 2) . "<br>";
 echo "substract : " . Math::subtract(1, 2) . "<br>";
 echo "Multiply " . Math::multiply(1, 2);