<?php
function calcule($nombre1, $operateur, $nombre2) {
    switch ($operateur) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
            if ($nombre2 != 0) {
                return $nombre1 / $nombre2;
            } else {
                return "Division par zéro impossible.";
            }
        case '%':
            return $nombre1 % $nombre2;
        default:
            return "Opérateur non valide.";
    }
}

// Exemple d'utilisation
$resultat = calcule(10, '+', 5);
echo "Résultat : " . $resultat;
?>
