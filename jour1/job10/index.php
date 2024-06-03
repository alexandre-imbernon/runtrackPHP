<?php
// Déclaration de la fonction bonjour()
function bonjour($jour) {
    if ($jour) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

// Appel de la fonction bonjour() avec le paramètre true
bonjour(true); // Affiche "Bonjour"
echo "<br>"; // Ajout d'un retour à la ligne en HTML

// Appel de la fonction bonjour() avec le paramètre false
bonjour(false); // Affiche "Bonsoir"
?>