<?php 
    session_start();
    if(!isset($_SESSION['palabra']) || $_SESSION['vidas'] > 0) {
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
    <h2>Lo siento, has perdido</h2>
    <p>La palabra secreta era: <?php echo $_SESSION['palabra']; ?></p>
    <p>Has fallado los <?php $_SESSION['vidas'] ?> intentos</p>
    <p>Has usado estas letras: <?php echo implode(', ', $_SESSION['letras_usadas']); ?></p>
    <button>
        <a href="index.php">Jugar de nuevo</a>
    </button>
</body>
</html>
<?php session_destroy(); ?>