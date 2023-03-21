<?php
// echo "Nous allons voir les variable";


$prenom  = 'Marc';
$nom     = 'DU';
$note1   = 0;
$note2   = 20;
$moyenne = ($note1 + $note2) / 2;


// echo "\n" . 'Bonjour ' . $prenom . ' ' . $nom . ' tu as eu ' . (($note1 + $note2) / 2) . ' de moyenne';
// echo "\nBonjour $prenom $nom tu as eu $moyenne de moyenne";


// tableau 
$eleve = ['nom' => 'DU', 'prenom' => 'Marc', 'note' => [20, 21, 20]];

$classe = [
    [
        'nom' => 'DU',
        'prenom' => 'Citron',
        'age' => '2 mois'
    ],
    [
        'nom' => 'DU',
        'prenom' => 'acai',
        'age' => '2 mois'
    ],
    [
        'nom' => 'DU',
        'prenom' => 'cacahuete',
        'age' => '2 mois'
    ],
    [
        'nom' => 'DU',
        'prenom' => 'saucisse',
        'age' => '2 mois'
    ]
];

// echo $eleve['prenom']. ' ' .$eleve['nom'] . ' à ' .count($classe). ' enfants';

// print_r($classe);
// echo $classe[3]['prenom'];

// constante

define("marques", [
    "huawei",
    "xiaomi",
    "oppo"
]);

// print_r(marques);


// condition
// $name = readline('Entrez votre prénom : ');

// if ($name === "Marc") {
//     if ($moyenne === 10) {
//         echo "\nBonjour $prenom $nom tu as $moyenne de moyenne. Tu as juste la moyenne" ;
//     } elseif ($moyenne <= 10) {
//         echo "\nBonjour $prenom $nom tu as $moyenne de moyenne. Tu n'as pas la moyenne" ;
//     } 
//     else {
//         echo "\nBonjour $prenom $nom tu as $moyenne de moyenne. Tu as plus que la moyenne" ;
//     }
    
// } else {
//     echo "\nBonjour $name tu n'a pas encore de moyenne";
// }

// $prix = readline('Entrez votre prix : ');

// switch ($prix) {
//     case '1':
//         echo "C'est donné à ce prix";
//         break;
//     case '2':
//         echo "C'est un prix convenable";
//         break;
//     case '3':
//         echo "Ce n'est pas donné à ce prix";
//         break;
    
//     default:
//         echo "Pas de prix entrez";
//         break;
// }

// $heure = readline("Entrez une heure : ");

// if ((9 <= $heure && $heure <= 12) || (14 <= $heure && $heure <= 17)) {
//     echo "Le magasin est ouvert";
// } else {
//     echo "Le magasin est fermé";
// }

/**
 * lOGIQUE BOOLEAN
 * 
 * VRAI && VRAI = VRAI
 * VRAI && FAUX = FAUX
 * FAUX && FAUX = FAUX
 * 
 * VRAI || VRAI = VRAI
 * VRAI || VRAI = VRAI
 * VRAI || VRAI = FAUX
 */

// boucles

// $valeur = null;

// // tant que 
// while ($valeur !== 10) {
//     $valeur = (int)readline("Entrez une valeur : ");
// // break; // si je veux brisé la boucle 
// }
// echo "Bravo tu as trouvé !";

// // for
// for ($v=0; $v < 10 ; $v++) { 
//     echo "- $v \n";
// }

// pour chaque 
// $tab = ['2' => 13, '5' => 10, '9' => 18];
// $etudiant = [
//     'licence 1' => ['Malice', 'Marc', 'Marco'],
//     'licence 2' => ['Malicia', 'Mima'],
//     'licence 3' => ['Mali', 'lili'],
//     'licence 4' => ['Malie', 'Crapaute']
// ];

// foreach ($tab as $tab) {
//     echo "- $tab \n";
// }

// foreach ($etudiant as $licence => $etudiant) {
//     echo "$etudiant est dans en $licence \n";
// }

// foreach ($etudiant as $licence => $listEtudiant) {
//     echo "Les étudiants en $licence sont :\n";
//     foreach ($listEtudiant as $etudiant) {
//         echo "- $etudiant \n";
//     }
//     echo "\n";
// }

// foreach ($tab as $id => $tab) {
//     echo "La clé est $id et la valeur est $tab \n";
// }

// // TP
// $notesInput = [];
// $userNotes = null;

// while (true) {
//     $userNotes = readline("Entrez une nouvelle notes (ou 'fin' pour terminer) : ");
//     if ($userNotes === 'fin') {
//         break;
//     } else {
//         $notesInput[] = (int)$userNotes;
//     }
// }

// foreach ($notesInput as $notesInput) {
//     echo "- $notesInput \n";
// }