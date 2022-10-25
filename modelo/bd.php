<?php 
        $user = "root";
        $pass = "";
        $server = "localhost";
        $db = "prueba_jhens";

        $conexion= new mysqli($server,$user,$pass,$db);

        if($conexion->connect_error){
            die("La conexión ha fallado".$conexion->connect_error);
        }else{

            //echo "conectado";
        }
?>