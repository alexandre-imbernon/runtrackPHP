<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nombre d'arguments POST</title>
</head>
<body>
    <?php
    // Vérifier si le formulaire a été soumis en utilisant la méthode POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty(array_filter($_POST))) {
        $nombre_arguments = count(array_filter($_POST));
        echo "Nombre d'arguments POST : " . $nombre_arguments;
    } else {
        echo "Aucun argument POST soumis.";
    }
    ?>
    
    <form method="post" action="">
        <!-- Ajoutez ici les champs de votre formulaire -->
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">
        <br>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email">
        <br>
        <!-- ... autres champs ... -->
        <br>
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>