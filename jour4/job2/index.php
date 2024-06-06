<?php
// Durée de vie du cookie en jours
$cookie_duration = 30;

// Vérifier si le bouton reset a été cliqué
if (isset($_POST['reset'])) {
    setcookie("nbVisites", "", time() - 3600); // Supprimer le cookie en le mettant dans le passé
    $nbVisites = 0;
} else {
    // Initialisation ou incrémentation du cookie
    if (!isset($_COOKIE['nbVisites'])) {
        $nbVisites = 1;
    } else {
        $nbVisites = $_COOKIE['nbVisites'] + 1;
    }
    // Mettre à jour le cookie
    setcookie("nbVisites", $nbVisites, time() + (86400 * $cookie_duration)); 
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visites</title>
</head>
<body>
    <h1>Nombre de visites : <?php echo $nbVisites; ?></h1>
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>