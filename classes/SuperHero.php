<?php

/**
 * extends = hérite
 * SuperHero hérite donc des méthodes  et des propriétés de Person
 *  * SuperHero hérite du "parent", SuperHero est l'enfant de Person
 */

class SuperHero extends Person
{
    // je peux ajouter une propriété, ici ses super-pouvoirs (capacités)
    private $capacity;

    // Et je peux aussi ajouter des méthodes :D
    // Getter
    public function getCapacity()
    {
        return $this->capacity;
    }

    // Setter
    public function setCapacity($capacity)
    {
        // Contrôle de la donnée
        if (is_string($capacity)) {
            $this->capacity = $capacity;
        }
    }

    // Le super héros se présente
    public function superSayHello()
    {
        // $this->sayHello();
        parent::sayHello(); // mot clé parent = appel à une méthode du parent

        // Et j'ajoute un message supplémentaire
        echo ' et mon pouvoir, c\' est : ' . $this->capacity;
    }

    // Surcharge / Override
    // Remplacement au sein des instances de la classe SuperHero, de la méthode sayHello()
    // La méthode reste la même pour les instance de la classe Person
    public function sayHello()
    {
        echo 'Bonjour, je suis '.$this->name . ', un super héros !';
    }
}