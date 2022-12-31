<?php
require "../modelo/bd.php";
if (!empty($_POST['btninsertar'])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido_p"]) and !empty($_POST["apellido_m"]) and !empty($_POST["dni"])
    and !empty($_POST['edad']) and !empty($_POST['direccion']) and !empty($_POST['correo']) and !empty($_POST['contraseña'])) {
        $nombre = $_POST['nombre'];
        $apellido_p = $_POST['apellido_p'];
        $apellido_m = $_POST['apellido_m'];
        $dni = $_POST['dni'];
        $edad = $_POST['edad'];
        $direccion = $_POST['direccion'];
        $correo = $_POST['correo'];
        $contraseña = md5($_POST['contraseña']);

        $insertar = "INSERT INTO usuario VALUES (NULL, '$nombre','$apellido_p','$apellido_m','$dni',
        '$edad','$direccion','$correo','$contraseña')";
        $query = mysqli_query($conexion, $insertar);
    } else {
        header('Location: http://localhost/prueba/vista/registro.php');
    }
}?>
<script>
setTimeout(() => {
   window.history.replaceState(null, null, window.location.pathname); //refrescar automaticamente  
}, 0);
</script>
<?php
/*if($query){
    echo "correcto";
}else{
    echo "incorrecto";
}*/
?>