<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jour05";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
  die("Échec de la connexion: " . $conn->connect_error);
}

// Requête SQL pour obtenir le nombre total d'étudiants
$sql = "SELECT COUNT(*) AS nb_etudiants FROM etudiant";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Récupérer la ligne de résultat
  $row = $result->fetch_assoc();
  // Début du tableau HTML
  echo "<table><tr><th>Nombre d'étudiants</th></tr>";
  // Affichage du nombre total d'étudiants
  echo "<tr><td>".$row["nb_etudiants"]."</td></tr>";
  echo "</table>";
} else {
  echo "0 résultats";
}
$conn->close();
?>
