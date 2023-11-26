<?php

session_start();

if(!isset($_SESSION['usuario'])){
    echo '
        <script>
            alert("Iniciar sesion");
            window.location = "index.php"
        </script>    
    ';
    session_destroy();
    die();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida - Icat</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <h1>Conoce todo sobre tu mascotas</h1>
    <a href="php/cerrar_sesion.php">Cerrar sesion</a>
</body>
</html>