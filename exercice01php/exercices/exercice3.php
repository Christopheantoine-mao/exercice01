<?php
/*Exercice 3 : boucles
En utilisant la boucle for, affichez la table de multiplication du chiffre 5.
A l'aide d'une ou plusieurs boucles, affichez le résultat suivant 122333444455555
En utilisant le tableau ci-dessous, comptez le nombre d'éléments du tableau et donnez le nombre total des habitants. <?php   $pays_population = array('France' => 67595000, 'Suede' => 9998000, 'Suisse' => 8417000, 'Kosovo' => 1820631, 'Malte' => 434403, 'Mexique' => 122273500, 'Allemagne' => 82800000); */

// Affichage de la table de multiplication du chiffre 5
function tableMultiplication5() {
    for ($i = 1; $i <= 10; $i++) {
        echo "5 * $i = " . (5 * $i) . "\n";
    }
}




for ($i = 1; $i <= 10; $i++) {
    echo "5 * $i = " . (5 * $i) . "\n";
}




?>
<?php


// Affichage de la séquence 122333444455555
function genererSequence() {
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $i;
        }
    }
}

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i;
    }
}
?>

<?php
function totalHabitants($pays_population) {
    $totalHabitants = 0;
    foreach ($pays_population as $population) {
        $totalHabitants += $population;
    }
    return [
        'nombrePays' => count($pays_population),
        'totalHabitants' => $totalHabitants
    ];
}
// Tableau des populations par pays
$pays_population = array(
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000
);

// Calcul du nombre total d'habitants
$totalHabitants = 0;
foreach ($pays_population as $population) {
    $totalHabitants += $population;
}

// Affichage du nombre d'éléments dans le tableau et du total des habitants
function fibonacci($nombreElements) {
    $fib = [0, 1]; // Initialise les deux premiers termes
    for ($i = 2; $i < $nombreElements; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return array_slice($fib, 1); // Retourne le tableau sans le premier élément (0)
}


echo "Nombre de pays : " . count($pays_population) . "\n";
echo "Total des habitants : " . $totalHabitants . "\n";
?>
