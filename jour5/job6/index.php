<?php
$host = 'localhost'; // Votre hôte
$db   = 'jour05'; // Nom de votre base de données
$user = 'root'; // Votre nom d'utilisateur
$pass = ''; // Votre mot de passe
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$sql = "SELECT * FROM etudiant WHERE prenom LIKE 'T%'";
$stmt = $pdo->query($sql);

echo "<table>";
echo "<thead><tr>";
$columnNames = $stmt->fetch(PDO::FETCH_ASSOC);
if ($columnNames) {
    foreach ($columnNames as $key => $value) {
        echo "<th>" . htmlspecialchars($key) . "</th>";
    }
    echo "</tr></thead>";
    echo "<tbody>";
    do {
        echo "<tr>";
        foreach ($columnNames as $value) {
            echo "<td>" . htmlspecialchars($value) . "</td>";
        }
        echo "</tr>";
    } while ($columnNames = $stmt->fetch(PDO::FETCH_ASSOC));
}
echo "</tbody>";
echo "</table>";
?>