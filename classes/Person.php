<?php

// Ma classe
class Person
{
    /**
     * La propriété private n'est pas accessible depuis l'enfant
     * caroline-goldbronn
     * 15:14
     * encore heureux mais après l'héritage, ça change
     */
    
    // Private = on ferme à clés
    // Protected = on ferme à clés et on donne un double des clés aux enfants

    // protected = accessible aux enfants
    protected $name;
    
    public function __construct($nameParam='')
    {
        $this->name = $nameParam;
    }
    
    public function sayHello()
    {
        echo 'Bonjour, je suis '.$this->name;
    }
}
