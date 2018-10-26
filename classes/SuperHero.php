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
}