<h1>Exercice Livres de SK</h1>

<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'.$class_name.'.php';  
});


// Auteurs
$stephenKing = new Auteur("Stephen", "King"); 

// Livres
$sk1 = new Livre("Ca", "1986", 1138, 20);
$sk2 = new Livre("Simetierre", "1983", 374, 15);
$sk3 = new Livre("Le Fléau", "1978", 823, 14);
$sk4 = new Livre("Shining", "1977", 447, 16);

// ECHOS
echo $stephenKing->afficherBibliographie();
//echo $sk1."<br>";
//echo $sk2."<br>";
//echo $sk3."<br>";
//echo $sk4."<br>";
//echo var_dump($class_bibliographie);