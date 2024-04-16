<?php
$age = 9; // Définissez l'âge ici

if ($age >= 10 && $age < 18) {
    echo "Vous êtes un adolescent.";
} elseif ($age >= 18 && $age < 50) {
    echo "Vous êtes adulte.";
} elseif ($age >= 50) {
    echo "Vous êtes senior.";
} else {
    echo "Vous êtes un enfant.";
}
switch (true){
case $age >=10 && $age <18 : echo 'ado' ;

}
?>
