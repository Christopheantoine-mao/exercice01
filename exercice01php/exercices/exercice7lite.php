<?php

/**
 * Fonction pour uploader une image
 *
 * @param array $data Données du fichier uploadé
 * @param string $targetDirectory Répertoire cible pour l'upload
 * @return bool Résultat de l'upload
 */
function uploadImage(array $data, string $targetDirectory) : bool
{
    // Vérifie si le fichier a été correctement uploadé sans erreur
    if (!isset($data['error']) || is_array($data['error'])) {
        echo "Problème de données fournies.";
        return false;
    }

    // Vérifie l'erreur de l'upload
    if ($data['error'] != UPLOAD_ERR_OK) {
        echo "Erreur lors de l'upload du fichier.";
        return false;
    }

    // Vérifie si le fichier n'est pas trop volumineux
    if ($data['size'] > 2000000) { // Taille maximale de 2 Mo
        echo "Le fichier est trop volumineux.";
        return false;
    }

    // Sécurise le nom du fichier et construit le chemin de destination
    $filename = basename($data['name']);
    $filepath = $targetDirectory . $filename;

    // Vérifie l'extension du fichier
    $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    if (!in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) {
        echo "Format de fichier non autorisé.";
        return false;
    }

    // Déplace le fichier uploadé vers le répertoire cible
    if (!move_uploaded_file($data['tmp_name'], $filepath)) {
        echo "Échec de l'enregistrement du fichier.";
        return false;
    }

    return true;
}

// Traitement du formulaire lors de la réception des données
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['picture'])) {
    $targetDir = 'images/';
    // Crée le répertoire s'il n'existe pas
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    // Tentative d'upload de l'image
    if (uploadImage($_FILES['picture'], $targetDir)) {
        echo 'Chargement du fichier réussi.';
    } else {
        echo 'Échec du chargement du fichier.';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload d'image</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="firstname" placeholder="Prénom">
        <input type="text" name="lastname" placeholder="Nom">
        <input type="file" name="picture" required>
        <input type="color" name="color">
        <input type="submit" value="Valider">
    </form>
</body>
</html>
