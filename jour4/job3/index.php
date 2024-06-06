<?php
session_start();

// Initialisation de la variable de session pour stocker les prénoms
if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

// Ajout du prénom dans la variable de session
if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    $_SESSION['prenoms'][] = htmlspecialchars($_POST['prenom']);
    // Redirection pour éviter la resoumission du formulaire
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Réinitialisation de la liste si le bouton "reset" est cliqué
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
    // Redirection pour éviter la resoumission du formulaire
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des prénoms</title>
</head>
<body>
    <h1>Ajouter un prénom</h1>
    <form method="post">
        <input type="text" name="prenom" required>
        <button type="submit">Ajouter</button>
    </form>
    <h2>Liste des prénoms :</h2>
    <ul>
        <?php foreach ($_SESSION['prenoms'] as $prenom): ?>
            <li><?php echo htmlspecialchars($prenom); ?></li>
        <?php endforeach; ?>
    </ul>
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>
