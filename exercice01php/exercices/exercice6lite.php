

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sécurisation des entrées du formulaire
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $codePostal = filter_input(INPUT_POST, 'codePostal', FILTER_SANITIZE_NUMBER_INT);
    $telephone = filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $demande = filter_input(INPUT_POST, 'demande', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $offre = filter_input(INPUT_POST, 'offre', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $politique = filter_has_var(INPUT_POST, 'politique') ? 'Oui' : 'Non';

    // Validation des données
    $errors = [];
    if (!$nom) { $errors[] = "Nom invalide."; }
    if (!$prenom) { $errors[] = "Prénom invalide."; }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $errors[] = "Email invalide."; }
    if (empty($message)) { $errors[] = "Le message ne peut être vide."; }

    if (count($errors) == 0) {
        echo "<h1>Informations reçues du formulaire</h1>";
        echo "<ul>";
        echo "<li>Nom : $nom</li>";
        echo "<li>Prénom : $prenom</li>";
        echo "<li>Code Postal : $codePostal</li>";
        echo "<li>Téléphone : $telephone</li>";
        echo "<li>Email : $email</li>";
        echo "<li>Demande : $demande</li>";
        echo "<li>Offre choisie : $offre</li>";
        echo "<li>Message : $message</li>";
        echo "<li>Politique de confidentialité acceptée : $politique</li>";
        echo "</ul>";

        // Préparation de l'email
        $to = "votreemail@example.com";
        $subject = "Nouveau message de $nom";
        $email_content = "Nom: $nom\nPrénom: $prenom\nEmail: $email\nMessage:\n$message\n";
        $email_headers = "From: $nom <$email>";

        // Envoi de l'email
        if (mail($to, $subject, $email_content, $email_headers)) {
            echo "Merci pour votre message. Nous vous répondrons dès que possible.";
        } else {
            echo "Oops! Quelque chose s'est mal passé et nous n'avons pas pu envoyer votre message.";
        }
    } else {
        echo "<div>Erreur de validation:</div><ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    }
} else {
    echo "Le formulaire n'a pas été soumis correctement.";
}
?>






