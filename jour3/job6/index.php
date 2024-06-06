<?php
function leetSpeak($str) {
    // Tableau associatif des conversions leet speak
    $leetDict = array(
        'A' => '4', 'a' => '4',
        'B' => '8', 'b' => '8',
        'E' => '3', 'e' => '3',
        'G' => '6', 'g' => '6',
        'L' => '1', 'l' => '1',
        'S' => '5', 's' => '5',
        'T' => '7', 't' => '7'
    );
    
    // Parcourir la chaîne de caractères et effectuer les remplacements
    $leetStr = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        // Si le caractère est dans le tableau de conversion, le remplacer
        if (isset($leetDict[$char])) {
            $leetStr .= $leetDict[$char];
        } else {
            // Sinon, conserver le caractère original
            $leetStr .= $char;
        }
    }
    
    return $leetStr;
}

// Exemple d'utilisation
$str = "A dix-sept ans, Satoko n'a jamais vraiment eu peur. Mais elle sait que parfois, la peur peut être exacerbée par l'imagination.";
echo "La traduction Leet speak de '$str' est : " . leetSpeak($str);
?>