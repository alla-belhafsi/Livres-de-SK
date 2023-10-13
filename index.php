<h1>Exercice Livres de SK</h1>

<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'.$class_name.'.php';  
});


// Auteurs
$stephenKing = new Auteur("Stephen", "King"); 

// Livres
$sk1 = new Livre("Ca", "1986", 1138, 20, $stephenKing);
$sk2 = new Livre("Simetierre", "1983", 374, 15, $stephenKing);
$sk3 = new Livre("Le Fléau", "1978", 823, 14, $stephenKing);
$sk4 = new Livre("Shining", "1977", 447, 16, $stephenKing);

// ECHOS
echo $stephenKing->afficherBibliographie();
