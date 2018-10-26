<?php

// Ma classe
class Person
{
    public $name;
    
    public function __construct($nameParam='')
    {
        $this->name = $nameParam;
    }
    
    public function sayHello()
    {
        echo 'Bonjour, je suis '.$this->name;
    }
}
