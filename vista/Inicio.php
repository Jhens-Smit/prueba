<!DOCTYPE html>
<?php 
include("../modelo/bd.php");
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Inicio de Sesión</title>
</head>
<body>
    <center>
    <h1><p><center>Iniciar Sesión</p></h1>
    <h5>Correo: <input type="text"> </h5>
    <h5>Contraseña: <input type="password"> </h5>
    <input class="btn btn-success" type="button" value="Iniciar Sesión" >
    <a href="registro.php"><input class="btn btn-warning" type="button" value="Registrarse"></a>
</center>
</body>
</html>