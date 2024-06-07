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

// Requête SQL pour obtenir la capacité moyenne des salles
$sql = "SELECT AVG(capacite) AS capacite_moyenne FROM salle";
$result = $conn->query($sql);

// Vérification si la requête a retourné un résultat
if ($result->num_rows > 0) {
    // Début du tableau HTML
    echo "<table border='1'>";
    // En-tête du tableau avec le nom des champs
    echo "<tr><th>capacite_moyenne</th></tr>";
    // Affichage des données de chaque ligne
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["capacite_moyenne"]. "</td></tr>";
    }
    echo "</table>"; // Fin du tableau HTML
} else {
    echo "0 résultats";
}
// Fermeture de la connexion
$conn->close();
?>
