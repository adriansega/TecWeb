<?php

session_start();
include_once "conexion.php";

//obtenemos los valores de anadirMonitor.html
if(isset($_POST['anadir'])){
    $nombre=$_POST['nombreMonitor'];
    $apellidos=$_POST['apellidosMonitor'];
    $descripcion=$_POST['descripcionMonitor'];
    $archivo=$_FILES['imagenMonitor']['tmp_name'];
    $destino= "fotos/". $_FILES['imagenMonitor']['name'];
    move_uploaded_file($archivo, $destino);

    if($nombre==null or $apellidos==null){
        echo 'Por favor rellene los campos obligatorios *';
    }else{
        //comprobamos que el nombre y apellidos no esten en la BD
        $sql = mysqli_query($con, "SELECT nombreMonitor FROM monitores WHERE nombreMonitor = '$nombre' AND apellidosMonitor = '$apellidos'");
        $contar = mysqli_num_rows($sql);

        if($contar>0){			//La persona ya está
            echo 'Este monitor ya existe en la BD';	
        }else{ //Añade la informacion a la tabla
            $sql = "INSERT `monitores`(`idMonitor`, `nombreMonitor`, `apellidosMonitor`, `descripcionMonitor`, `imagenMonitor`) VALUES ('','$nombre','$apellidos','$descripcion', '$destino')";

            mysqli_query($con, $sql);

            echo 'Monitor añadido correctamente';
        }

    }
}
include_once "cerrar_conexion.php";	
header("Location: ./monitores.php");
?>
