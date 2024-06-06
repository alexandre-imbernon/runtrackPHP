<?php
function occurrences($str, $char) {
    $count = 0;
    // Parcourir la chaîne de caractères
    for ($i = 0; $i < strlen($str); $i++) {
        // Si le caractère actuel correspond à $char, augmenter le compteur
        if ($str[$i] == $char) {
            $count++;
        }
    }
    return $count;
}

// Exemple d'utilisation
$str = "Je crois que c'est cuît pour l'alternance";
$char = "o";
echo "Le nombre d'occurrences de '$char' dans '$str' est : " . occurrences($str, $char);
?>