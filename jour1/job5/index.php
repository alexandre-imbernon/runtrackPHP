<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Affichage des Nombres</title>
</head>
<body>

<?php
for ($i = 0; $i <= 1337; $i++) {
    // Vérifier si le nombre doit être exclu
    if ($i == 26 || $i == 37 || $i == 88 || $i == 1111) {
        continue; // Passer au prochain nombre si c'est 26, 37, 88 ou 1111
    }
    echo "$i<br>"; // Afficher le nombre avec un retour à la ligne
}
?>

</body>
</html>