<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Connexion</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == 'John' && $password == 'Rambo') {
            echo "<p>ce n'est pas ma guerre</p>";
        } else {
            echo "<p>votre pire cauchemar</p>";
        }
    }
    ?>

    <form action="" method="post">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <button type="submit">Connexion</button>
    </form>
</body>
</html>