<?php

session_start();
include_once "conexion.php";

$idMonitor=$_GET['idMonitor'];
if(isset($idMonitor)){
    $sql = "SELECT idMonitor FROM monitores WHERE idMonitor='$idMonitor'";
    $rec = mysqli_query($con,$sql);
    if(mysqli_num_fields($rec) == 1) {
        $sql = "DELETE FROM monitores WHERE idMonitor='$idMonitor'";
        mysqli_query($con, $sql);
        echo "Monitor eliminado correctamente";
    }
}else echo "Este monitor no existe en la BD";

include_once "cerrar_conexion.php";
//header("Location: monitores.php");
?>
