
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <h1>Accueil</h1>
    <?php
        echo '<p> Bonjour '.$_POST['name'].'</p>';
        echo '<p>Vous avez '.$_POST['age'].' ans </p>';
    ?>
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post.php" method="post">
        <input type="text" name="name" placeholder="Nom">
        <input type="number" name="age" placeholder="Age">
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>