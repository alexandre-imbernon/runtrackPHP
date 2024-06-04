<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nombre d'arguments POST</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty(array_filter($_POST))) {
        $nombre_arguments = count(array_filter($_POST));
        echo "<p>Nombre d'arguments POST : " . $nombre_arguments . "</p>";
        
        echo "<table>";
        echo "<tr><th>Argument</th><th>Valeur</th></tr>";
        
        foreach ($_POST as $argument => $valeur) {
            if (!empty($valeur)) {
                echo "<tr><td>" . htmlspecialchars($argument) . "</td><td>" . htmlspecialchars($valeur) . "</td></tr>";
            }
        }
        
        echo "</table>";
    } else {
        echo "<p>Aucun argument POST soumis.</p>";
    }
    ?>
    <br>
    <form method="post" action="">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">
        <br>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email">
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
