<?php
function tabMultiplication(int $maxNumber, int $endTable, int $startTable): array {
    $result = []; // Initialisation du tableau multidimensionnel pour les résultats
    
    // Générer les tables de multiplication pour chaque multiplicande
    for ($table = $startTable; $table <= $endTable; $table++) {
        $resultTable = []; // Stocker les résultats pour la table actuelle
        
        // Calculer les produits pour chaque multiplicateur de 1 à $maxNumber
        for ($multiplier = 1; $multiplier <= $maxNumber; $multiplier++) {
            $resultTable[$multiplier] = $table * $multiplier;
        }
        
        // Ajouter les résultats de la table actuelle au tableau général $result
        $result["Table de $table"] = $resultTable;
    }
    
    return $result; // Retourner le tableau des résultats
}

function multiToSolo($results): array {
    $flattenedArray = []; // Initialisation du tableau à une dimension

    // Parcourir chaque sous-tableau (chaque table de multiplication)
    foreach ($results as $tableResults) {
        // Parcourir chaque produit dans le sous-tableau
        foreach ($tableResults as $product) {
            // Ajouter chaque produit au tableau à une dimension
            $flattenedArray[] = $product;
        }
    }

    return $flattenedArray; // Retourner le tableau aplatit
}
// Génération des tables de multiplication
$multiResults = tabMultiplication(10, 12, 1);

// Transformation en un tableau à une dimension
$soloArray = multiToSolo($multiResults);

// Affichage des résultats
echo "<pre>";
print_r($soloArray);
echo "</pre>";

