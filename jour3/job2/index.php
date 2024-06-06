<?php
function bonjour($jour) {
    if ($jour) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// Appel de la fonction avec true (affichera "Bonjour")
bonjour(true);
echo " "; // Ajoutez un espace ou une virgule ici
// Appel de la fonction avec false (affichera "Bonsoir")
bonjour(false);
?>