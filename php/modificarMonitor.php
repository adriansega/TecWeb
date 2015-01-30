<?php

session_start();
include_once "conexion.php";

if(isset($_POST['modificar'])){
    $imagen="";
    //obtenemos los valores de anadirPersona
    $idMonitor=$_POST['idMonitor'];
    $nombre=$_POST['nombreMonitor'];
    $apellidos=$_POST['apellidosMonitor'];
    $descripcion=$_POST['descripcion'];
    if ($_FILES['imagenMonitor']['name']!="") {
        $archivo=$_FILES['imagenMonitor']['tmp_name'];
        $destino= "fotos/". $_FILES['imagenMonitor']['name'];
        move_uploaded_file($archivo, $destino);
        $imagen=", imagenMonitor='$destino'";
    }

    $sql = "UPDATE monitores SET nombreMonitor='$nombre',apellidosMonitor='$apellidos',descripcionMonitor='$descripcion' $imagen WHERE idMonitor='$idMonitor'";
    mysqli_query($con, $sql);      

} 
include_once "cerrar_conexion.php";
 header("Location: ./monitores.php");

?>
