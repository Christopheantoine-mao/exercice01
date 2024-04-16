<?php
function tableMultiplication5() {
    for ($i = 1; $i <= 10; $i++) {
        echo "5 * $i = " . (5 * $i) . "\n";
    }
}




function genererSequence() {
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $i;
        }
    }
}






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





function fibonacci($nombreElements) {
    $fib = [0, 1]; // Initialise les deux premiers termes
    for ($i = 2; $i < $nombreElements; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return array_slice($fib, 1); // Retourne le tableau sans le premier élément (0)
}







function myFn($cle, $tableau) {
    if (array_key_exists($cle, $tableau)) {
        return $tableau[$cle];
    }
    return null; // Retourne null si la clé n'existe pas
}
// Pour la table de multiplication de 5
tableMultiplication5();

// Pour générer et afficher la séquence 122333444455555
genererSequence();

// Pour calculer le total des habitants
$pays_population = array(
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000
);
$resultat = totalHabitants($pays_population);
echo "Nombre de pays : " . $resultat['nombrePays'] . "\n";
echo "Total des habitants : " . $resultat['totalHabitants'] . "\n";

// Pour la suite de Fibonacci
echo implode(', ', fibonacci(10)) . "\n";

// Pour récupérer une valeur associée à une clé dans un tableau
$persons = array('major' => true, 'age' => 36, 'name' => 'Fatou');
$vFatou = myFn("age", $persons);
$vNull = myFn('address', $persons);
echo "Age: " . $vFatou . "\n"; // Affiche 36
echo "Adresse: " . $vNull . "\n"; // Affiche rien (null)
