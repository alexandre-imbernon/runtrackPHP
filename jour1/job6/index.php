<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Affichage des Nombres</title>
    <style>
        .italic {
            font-style: italic;
        }
        .underline {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<?php
for ($i = 0; $i <= 100; $i++) {
    if ($i == 42) {
        // Remplacer 42 par "La Plateforme_"
        echo "La Plateforme_<br>";
    } elseif ($i >= 0 && $i <= 20) {
        // Si le nombre est entre 0 et 20, l'afficher en italique
        echo "<span class='italic'>$i</span><br>";
    } elseif ($i >= 25 && $i <= 50) {
        // Si le nombre est compris entre 25 et 50, le souligner
        echo "<span class='underline'>$i</span><br>";
    } else {
        // Afficher les autres nombres normalement
        echo "$i<br>";
    }
}
?>

</body>
</html>