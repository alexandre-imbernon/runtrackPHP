<?php
$maVariable = "LaPlateforme";
echo $maVariable;
?>

<br>

<?php
$vive = "Vive";
$exclamation = "!";
echo $vive . " " . $maVariable . " " . $exclamation;
?>

<br>

<?php
$nombre = 6;
echo "Variable avant l'addition : " . $nombre . "<br>";
$nombre += 4;
echo "Variable après l'addition de 4 : " . $nombre;
?>

<br>

<?php
$booleanVariable = true;
echo "Variable avant la modification : " . $booleanVariable . "<br>";
$booleanVariable = false;
echo "Variable après la modification (rien ne s'affiche car false) : " . $booleanVariable;
?>