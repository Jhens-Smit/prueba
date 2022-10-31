<?php
require "../modelo/bd.php";
$nombre = $_POST['nombre'];
$apellido_p = $_POST['apellido_p'];
$apellido_m = $_POST['apellido_m'];
$dni = $_POST['dni'];
$edad = $_POST['edad'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$insertar = "INSERT INTO usuario VALUES (NULL, '$nombre','$apellido_p','$apellido_m','$dni',
'$edad','$direccion','$correo','$contraseña')";
$query = mysqli_query($conexion, $insertar);
/*if($query){
    echo "correcto";
}else{
    echo "incorrecto";
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro correto</title>
</head>
<body>
    <h1>¡Gracias por registrarse!</h1>
    <a href="inicio.php"><input type="button" value="Volver a Iniciar Sesión" ></a>
</body>
</html>