<?php
// Durée de vie du cookie en jours
$cookie_duration = 30;

// Traitement du formulaire de connexion
if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
    setcookie("prenom", $prenom, time() + (86400 * $cookie_duration), "/"); // 86400 = 1 jour
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Traitement du bouton de déconnexion
if (isset($_POST['deco'])) {
    setcookie("prenom", "", time() - 3600, "/"); // Supprimer le cookie en le mettant dans le passé
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

$prenom = isset($_COOKIE['prenom']) ? htmlspecialchars($_COOKIE['prenom']) : null;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <?php if ($prenom): ?>
        <h1>Bonjour <?php echo $prenom; ?> !</h1>
        <form method="post">
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?php else: ?>
        <h1>Connexion</h1>
        <form method="post">
            <input type="text" name="prenom" required>
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php endif; ?>
</body>
</html>