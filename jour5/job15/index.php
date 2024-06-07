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

// Requête SQL avec jointure
$sql = "SELECT salle.nom AS nom_salle, etage.nom AS nom_etage FROM salle JOIN etage ON salle.id_etage = etage.id";
$result = $conn->query($sql);

// Vérifier si la requête a retourné des résultats
if ($result->num_rows > 0) {
  // Début du tableau HTML
  echo "<table border='1'>
          <tr>
            <th>Nom de la Salle</th>
            <th>Nom de l'Étage</th>
          </tr>";
  
  // Affichage des données de chaque ligne
  while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>".$row["nom_salle"]."</td>
            <td>".$row["nom_etage"]."</td>
          </tr>";
  }
  echo "</table>";
} else {
  echo "0 résultats";
}

// Fermer la connexion
$conn->close();
?>
