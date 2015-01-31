<?php
session_start();
if(!isset($_SESSION['usuario'])) return;

include_once "conexion.php";

$accion=$_POST['accion'];

$imagen="";
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

if($accion=="insertar"){
    //comprobamos que el nombre y apellidos no esten en la BD
    $res = mysqli_query($con, "SELECT nombreMonitor FROM monitores WHERE nombreMonitor = '$nombre' AND apellidosMonitor = '$apellidos'");
    $contar = mysqli_num_rows($res);

    if($contar>0){			//La persona ya está
        echo 'Este monitor ya existe en la BD';	
    }else{ //Añade la informacion a la tabla
        $sql = "INSERT monitores(nombreMonitor, apellidosMonitor, descripcionMonitor, imagenMonitor) VALUES ('$nombre','$apellidos','$descripcion', '$destino')";

        mysqli_query($con, $sql);
        echo 'Monitor añadido correctamente';
    }
} 

if($accion=="modificar"){
    $sql = "UPDATE monitores SET nombreMonitor='$nombre',apellidosMonitor='$apellidos',descripcionMonitor='$descripcion' $imagen WHERE idMonitor='$idMonitor'";
    mysqli_query($con, $sql);      
} 

if($accion=="borrar"){
    $sql = "SELECT idMonitor FROM monitores WHERE idMonitor='$idMonitor'";
    $res = mysqli_query($con,$sql);
    if(mysqli_num_fields($res) == 1) {
        $sql = "DELETE FROM monitores WHERE idMonitor='$idMonitor'";
        mysqli_query($con, $sql);
        echo "Monitor eliminado correctamente";
    }else echo "Este monitor no existe en la BD";
} 

include_once "cerrar_conexion.php";
header("Location: ./monitores.php");
?>
