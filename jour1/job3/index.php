<?php
$integerVariable = 42;           // Entier
$floatVariable = 3.14;           // Flottant
$stringVariable = "Hello World"; // Chaîne de caractères
$booleanVariable = true;         // Booléen

function getTypeName($var) {
    if (is_int($var)) {
        return "Integer";
    } elseif (is_float($var)) {
        return "Float";
    } elseif (is_string($var)) {
        return "String";
    } elseif (is_bool($var)) {
        return "Boolean";
    } else {
        return "Unknown";
    }
}

$variables = [
    ['type' => getTypeName($integerVariable), 'name' => 'integerVariable', 'value' => $integerVariable],
    ['type' => getTypeName($floatVariable), 'name' => 'floatVariable', 'value' => $floatVariable],
    ['type' => getTypeName($stringVariable), 'name' => 'stringVariable', 'value' => $stringVariable],
    ['type' => getTypeName($booleanVariable), 'name' => 'booleanVariable', 'value' => $booleanVariable ? 'true' : 'false'],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tableau des Variables</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($variables as $variable): ?>
            <tr>
                <td><?php echo $variable['type']; ?></td>
                <td><?php echo $variable['name']; ?></td>
                <td><?php echo $variable['value']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>