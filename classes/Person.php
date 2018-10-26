<?php

// Private = on ferme à clés
// Protected = on ferme à clés et on donne un double des clés aux enfants

// Ma classe
class Person
{
    /**
     * protected = accessible aux enfants
     */
    protected $name;
    public $gender = 'man';
    
    public function __construct($nameParam='')
    {
        $this->name = $nameParam;
    }
    
    public function sayHello()
    {
        echo 'Person : Bonjour, je suis '.$this->name.' et du genre '.$this->gender;
        echo '<br> de la classe '.__CLASS__;
    }
}
