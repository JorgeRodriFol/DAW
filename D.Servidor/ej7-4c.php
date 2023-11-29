<?php
session_start();

if (!isset($_SESSION['cara_actual'])) {
    $_SESSION['cara_actual'] = '';
    $_SESSION['contador_A'] = 0;
    $_SESSION['contador_B'] = 0;
}

// Comprobar si se ha lanzado la moneda
if (isset($_POST['lanzar'])) {
    $caras = ['A', 'B'];
    $cara_lanzada = $caras[array_rand($caras)];

    $_SESSION['cara_actual'] = $cara_lanzada;

    if ($cara_lanzada == 'A') {
        $_SESSION['contador_A']++;
    } else {
        $_SESSION['contador_B']++;
    }
}

// Comprobar si se ha reiniciado el juego
if (isset($_POST['reiniciar'])) {
    session_unset();
    session_destroy();
    $_SESSION['cara_actual'] = '';
    $_SESSION['contador_A'] = 0;
    $_SESSION['contador_B'] = 0;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Cara y Cruz</title>
</head>

<body>
    <h1>Estado del juego</h1>
    <p>Resultado actual:
        <?php echo $_SESSION['cara_actual']; ?>
    </p>
    <p>Veces que ha salido la cara A:
        <?php echo $_SESSION['contador_A']; ?>
    </p>
    <p>Veces que ha salido la cara B:
        <?php echo $_SESSION['contador_B']; ?>
    </p>
    <p>Expresión del jugador A:
        <?php if ($_SESSION['contador_A'] > $_SESSION['contador_B']) {
            echo '&#128568;';
        } elseif ($_SESSION['contador_A'] == $_SESSION['contador_B']) {
            echo '&#128572;';
        } else {
            echo '&#128576;';
        } ?>
    </p>
    <p>Expresión del jugador B:
        <?php if ($_SESSION['contador_A'] < $_SESSION['contador_B']) {
            echo '&#128585;';
        } elseif ($_SESSION['contador_A'] == $_SESSION['contador_B']) {
            echo '&#128586;';
        } else {
            echo '&#128584;';
        } ?>
    </p>

    <form method="post">
        <input type="submit" name="lanzar" value="Lanzar Moneda">
        <input type="submit" name="reiniciar" value="Reiniciar Juego">
    </form>
</body>

</html>