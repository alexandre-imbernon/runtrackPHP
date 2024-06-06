<?php
session_start();

// Initialiser le jeu
if (!isset($_SESSION['board'])) {
    $_SESSION['board'] = array_fill(0, 9, '-');
    $_SESSION['player'] = 'X';
    $_SESSION['message'] = '';
}

// Réinitialiser le jeu
if (isset($_POST['reset'])) {
    $_SESSION['board'] = array_fill(0, 9, '-');
    $_SESSION['player'] = 'X';
    $_SESSION['message'] = '';
}

// Gestion du clic sur une case
if (isset($_POST['index'])) {
    $index = intval($_POST['index']);
    if ($_SESSION['board'][$index] === '-') {
        $_SESSION['board'][$index] = $_SESSION['player'];
        $_SESSION['player'] = $_SESSION['player'] === 'X' ? 'O' : 'X';
        checkWinner();
    }
}

// Vérification du gagnant
function checkWinner() {
    $board = $_SESSION['board'];
    $lines = [
        [0, 1, 2], [3, 4, 5], [6, 7, 8], // Lignes
        [0, 3, 6], [1, 4, 7], [2, 5, 8], // Colonnes
        [0, 4, 8], [2, 4, 6]             // Diagonales
    ];

    foreach ($lines as $line) {
        if ($board[$line[0]] !== '-' && 
            $board[$line[0]] === $board[$line[1]] && 
            $board[$line[1]] === $board[$line[2]]) {
            $_SESSION['message'] = $board[$line[0]] . ' a gagné';
            $_SESSION['board'] = array_fill(0, 9, '-');
            return;
        }
    }

    // Vérifier le match nul
    if (!in_array('-', $board)) {
        $_SESSION['message'] = 'Match nul';
        $_SESSION['board'] = array_fill(0, 9, '-');
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jeu du Morpion</title>
    <style>
        table { margin: 20px auto; }
        td { width: 60px; height: 60px; text-align: center; }
        button { width: 100%; height: 100%; font-size: 24px; }
        .message { text-align: center; font-size: 18px; margin: 20px; }
    </style>
</head>
<body>
    <div class="message"><?php echo $_SESSION['message']; ?></div>
    <form method="post">
        <table>
            <?php for ($i = 0; $i < 3; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j < 3; $j++): ?>
                        <td>
                            <?php if ($_SESSION['board'][$i * 3 + $j] === '-'): ?>
                                <button name="index" value="<?php echo $i * 3 + $j; ?>">-</button>
                            <?php else: ?>
                                <span><?php echo $_SESSION['board'][$i * 3 + $j]; ?></span>
                            <?php endif; ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
        <div style="text-align: center;">
            <button name="reset">Réinitialiser la partie</button>
        </div>
    </form>
</body>
</html>