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

// Requête SQL pour obtenir la superficie totale des étages
$sql = "SELECT SUM(superficie) AS superficie_totale FROM etage";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Récupérer la ligne de résultat
  $row = $result->fetch_assoc();
  // Début du tableau HTML
  echo "<table><tr><th>Superficie Totale</th></tr>";
  // Affichage de la superficie totale des étages
  echo "<tr><td>".$row["superficie_totale"]."</td></tr>";
  echo "</table>";
} else {
  echo "0 résultats";
}
$conn->close();
?>
