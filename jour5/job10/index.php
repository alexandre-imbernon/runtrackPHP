<?php
// Paramètres de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jour05";

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Requête SQL pour obtenir la somme des capacités des salles
$sql = "SELECT SUM(capacite) AS capacite_totale FROM salle"; // Assurez-vous que 'salles' est le nom correct de votre table
$result = $conn->query($sql);

// Vérification si la requête a retourné un résultat
if ($result->num_rows > 0) {
    // Début du tableau HTML
    echo "<table border='1'>";
    // En-tête du tableau avec le nom des champs
    echo "<tr><th>capacite_totale</th></tr>";
    // Affichage des données de chaque ligne
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["capacite_totale"]. "</td></tr>";
    }
    echo "</table>"; // Fin du tableau HTML
} else {
    echo "0 résultats";
}
// Fermeture de la connexion
$conn->close();
?>
