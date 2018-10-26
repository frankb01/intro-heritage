<?php

// Require des classes
require __DIR__ . '/classes/Person.php';
require __DIR__ . '/classes/SuperHero.php';

// J'instancie ma classe
$bruce = new Person('Bruce Wayne');

// J'appelle une méthode sur cet objet/instance
$bruce->sayHello();

echo '<br>';

// J'instancie ma classe SuperHero
$batman = new SuperHero('Batman');
$batman->sayHello();

echo '<br>';

 // J'instancie ma classe SuperHero
$superman = new SuperHero('Superman');
$superman->sayHello();
echo '<br>';

// Donnons-leur des pouvoirs
$batman->setCapacity('riche, très riche');
$superman->setCapacity('Rayon laser, peut voler, superfort, slip sexy, souffle glacial');

// print_r($batman);
// print_r($superman);

$batman->sayHello();
echo ' et mon pouvoir, c\'est : ' . $batman->getCapacity() . '<br>';
$superman->sayHello();
echo ' et mon pouvoir, c\'est : ' . $superman->getCapacity() . '<br>'; 