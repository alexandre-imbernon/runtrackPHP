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

// Calculer l'âge en se basant sur la date de naissance
$sql = "SELECT *, TIMESTAMPDIFF(YEAR, naissance, CURDATE()) AS age_calcul FROM etudiant HAVING age_calcul < 18";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Début du tableau HTML
  echo "<table><tr><th>ID</th><th>Nom</th><th>Prénom</th><th>Date de Naissance</th><th>Age</th></tr>";
  // Affichage de chaque ligne de données
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["nom"]."</td><td>".$row["prenom"]."</td><td>".$row["naissance"]."</td><td>".$row["age_calcul"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 résultats";
}
$conn->close();
?>