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

// Requête SQL
$sql = "SELECT prenom, nom, naissance FROM etudiant WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31'";
$result = $conn->query($sql);

// Vérifier si la requête a retourné des résultats
if ($result->num_rows > 0) {
  // Début du tableau HTML
  echo "<table border='1'>
          <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Date de Naissance</th>
          </tr>";
  
  // Affichage des données de chaque ligne
  while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>".$row["prenom"]."</td>
            <td>".$row["nom"]."</td>
            <td>".$row["naissance"]."</td>
          </tr>";
  }
  echo "</table>";
} else {
  echo "0 résultats";
}

// Fermer la connexion
$conn->close();
?>
