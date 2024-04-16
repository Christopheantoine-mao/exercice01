<?php
// Rappels
// Un tableau à une dimension
$person = [
    [
        'name' => 'John',
        'city' => 'Londres',
        'country' => 'UK',
        'isRich' => true,
        'size' => 1.85
    ],
    [
        'name' => 'Celine',
        'city' => 'Manchester',
        'country' => 'UK',
        'isRich' => true,
        'size' => 1.95
    ],
];

// Afficher le prénom de John
$johnData = $person[0]; // Tableau avec toutes les infos de John
echo $johnData['name'].'<br>';

// Afficher la ville de Celine
echo $person[1]['city'].'<br>'; // Manchester

// Parcourir tous les éléments du tableau $person
foreach($person as $individual) {
    echo "Nom: " . $individual['name'] . ", Ville: " . $individual['city'] . "<br>";
}
