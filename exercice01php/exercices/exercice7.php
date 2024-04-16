<?php
 
var_dump($_POST, $_FILES);
 
if(isset($_FILES['picture'])) {
    if(move_uploaded_file($_FILES['picture']['tmp_name'], 'images/'.$_FILES['picture']['name'])) {
        echo 'Chargement du fichier ok';
    } else {
        echo 'Chargment du fichier ko';
    }
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="firstname">
        <input type="text" name="lastname">
        <input type="file" name="picture">
        <input type="color" name="color">
        <input type="submit" value="Valider">
    </form>
</body>
</html>