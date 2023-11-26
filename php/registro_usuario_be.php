<?php

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_Completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['Contrasena'];

/* Encriptar contrasena
$contrasena = hash('sha512', $contrasena);
*/

$query = "INSERT INTO usuarios(nombre_completo, Correo, usuario, contrasena) 
values('$nombre_completo', '$correo', '$usuario', '$contrasena')";

//verificar datos del correo
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

if(mysqli_num_rows($verificar_correo) >0){
    echo '
    <script>
        alert("Correo registrado ");
        window.location = "../ElGato-main/index.php";
    </Script>
    ';
    exit();
}

//verificar datos del usuario
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

if(mysqli_num_rows($verificar_usuario) >0){
    echo '
    <script>
        alert("usuario registrado ");
        window.location = "../ElGato-main/index.php";
    </Script>
    ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    Echo '
    <Script>
    alert("Usuario registrado Exitosamente");
    window.location = "../index.php";
    </script>
    ';
}else{
    echo '
    <Script>
    alert("Usuario no Resgistrado");
    window.location = "../index.php";
    </script>
    ';
}

mysqli_close($conexion);

?>