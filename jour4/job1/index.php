<?php
session_start();

if (!isset($_SESSION['nbVisites'])) {
    $_SESSION['nbVisites'] = 0;
}

if (!isset($_POST['reset'])) {
    $_SESSION['nbVisites'] += 1;
}

if (isset($_POST['reset'])) {
    $_SESSION['nbVisites'] = 0;
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
    <h1>Nombre de visites : <?php echo $_SESSION['nbVisites']; ?></h1>
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>