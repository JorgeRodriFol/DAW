<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Cara y Cruz</title>
</head>

<body>
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
    <h1>Estado del juego</h1>
    <p>Haz click en los botones:</p>
    <form method="post">
        <input type="submit" name="lanzar" value="Lanzar Moneda">
        <input type="submit" name="reiniciar" value="Reiniciar Juego">
    </form>

    <div class="jugadores">
        <div>
            <h3>Jugador A</h3>
            <h1>
                <?php echo $_SESSION['contador_A']; ?>
                <?php if ($_SESSION['contador_A'] > $_SESSION['contador_B']) {
                    echo '&#128568;';
                } elseif ($_SESSION['contador_A'] == $_SESSION['contador_B']) {
                    echo '&#128572;';
                } else {
                    echo '&#128576;';
                } ?>
            </h1>
        </div>
        <div>
            <?php echo "<h1>" . $_SESSION['cara_actual'] . "</h1>"; ?>
        </div>
        <div>
            <h3>Jugador B</h3>
            <h1>
                <?php echo $_SESSION['contador_B']; ?>
            </h1>
            <h1>
                <?php if ($_SESSION['contador_A'] < $_SESSION['contador_B']) {
                    echo '&#128585;';
                } elseif ($_SESSION['contador_A'] == $_SESSION['contador_B']) {
                    echo '&#128586;';
                } else {
                    echo '&#128584;';
                } ?>
            </h1>
        </div>
    </div>
</body>

</html>