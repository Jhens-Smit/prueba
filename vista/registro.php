<!DOCTYPE html>
<html lang="es">
<?php 
include("../modelo/bd.php");
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><center>Registrarse</h1>
    <center>
    <form method="POST" name="form-work" action="insertar.php">
    <h4>Por favor ingresar sus datos: </h4>
    <h5>Nombres: <input name="nombre" type="text"></h5>
    <h5>Apellido Paterno: <input name="apellido_p" type="text"></h5>
    <h5>Apellido Materno: <input name="apellido_m" type="text"></h5>
    <h5>DNI: <input name="dni" type="text"></h5>
    <h5>Edad: <input name="edad" type="text"> </h5>
    <h5>Dirección: <input name="direccion" type="text"> </h5>
    <h5>Correo: <input name="correo" type="text"> </h5>
    <h5>Contraseña: <input name="contraseña" type="password"> </h5>
    <input type="submit" value="Realizar Registro" ></a>
    <a href="inicio.php"><input type="button" value="Volver a Iniciar Sesión" ></a>
    </form>
</center>
</body>
</html>