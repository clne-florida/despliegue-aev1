<?php 
    session_start();
    if(!isset($_SESSION['palabra']) || $_SESSION['letras_acertadas'] != $_SESSION['palabra']) {
        session_destroy();
        header("Location: index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ahorcado</title>
    <link rel="stylesheet" href="common.css">
</head>
<body>
    <h1>Juego del Ahorcado</h1>
    <h2>¡Enhorabuena, has ganado!</h2>
    <p>La palabra secreta era: <?php echo $_SESSION['palabra']; ?></p>
    <p>Te ha<?php echo $_SESSION['vidas'] == 1 ? '' : 'n' ?> quedado <?php echo $_SESSION['vidas']; ?> vida<?php echo $_SESSION['vidas'] == 1 ? '' : 's' ?></p>
    <p>Has usado estas letras: <?php echo implode(', ', $_SESSION['letras_usadas']); ?></p>
    <button>
        <a href="index.php">Jugar de nuevo</a>
    </button>
</body>
</html>
<?php session_destroy(); ?>