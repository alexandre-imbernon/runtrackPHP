<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Affichage des Nombres</title>
    <style>
        .highlight {
            font-weight: bold;
            text-decoration: underline;
        }
    </style>
</head>
<body>

<?php
for ($i = 0; $i <= 1337; $i++) {
    if ($i == 42) {
        echo "<span class='highlight'>$i</span><br>";
    } else {
        echo "$i<br>";
    }
}
?>

</body>
</html>
