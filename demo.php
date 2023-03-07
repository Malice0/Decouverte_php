<?php
echo "Nous allons voir les variable";


$prenom = 'Marc';
$nom = 'DU';
$note1 = 20;
$note2 = 21;
$moyenne = ($note1 + $note2) /2;

echo "\n" . 'Bonjour ' . $prenom . ' ' . $nom . ' tu as eu ' . (($note1 + $note2) /2) . ' de moyenne';
echo "\nBonjour $prenom $nom tu as eu $moyenne de moyenne";

