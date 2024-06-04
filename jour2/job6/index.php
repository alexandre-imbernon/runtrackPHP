<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vérification de Nombre</title>
</head>
<body>
    <form action="" method="get">
        <label for="nombre">Entrez un nombre :</label>
        <input type="number" id="nombre" name="nombre" required>
        <br><br>
        <button type="submit">Vérifier</button>
    </form>

    <?php
    if (isset($_GET['nombre'])) {
        $nombre = $_GET['nombre'];

        if (is_numeric($nombre)) {
            if ($nombre % 2 == 0) {
                echo "<p>Nombre pair</p>";
            } else {
                echo "<p>Nombre impair</p>";
            }
        } else {
            echo "<p>Veuillez entrer un nombre valide.</p>";
        }
    }
    ?>
</body>
</html>