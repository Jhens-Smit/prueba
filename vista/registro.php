<!DOCTYPE html>
<html lang="es">
<?php 
include("../modelo/bd.php");
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <center>
    <div class="container"><br>
    <h1>Registrarse</h1>
    <form method="POST" name="form-work" action="registro_exitoso.php">
    <h5>Por favor ingresar sus datos: </h5>
    <h6>Nombres: <input name="nombre" type="text"></h6>
    <h6>Apellido Paterno: <input name="apellido_p" type="text"></h6>
    <h6>Apellido Materno: <input name="apellido_m" type="text"></h6>
    <h6>DNI: <input name="dni" type="text"></h6>
    <h6>Edad: <input name="edad" type="text"> </h6>
    <h6>Dirección: <input name="direccion" type="text"> </h6>
    <h6>Correo: <input name="correo" type="text"> </h6>
    <h6>Contraseña: <input name="contraseña" type="password"> </h6>
    <input class="btn btn-success" name="btninsertar" type="submit" value="Realizar Registro" ></a>
    <a href="inicio.php"><input class="btn btn-danger" type="button" value="Volver a Iniciar Sesión" ></a>
    </form>
    </div>
    </center>
</body>
</html>