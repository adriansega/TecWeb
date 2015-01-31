<?php
session_start();
if(!isset($_SESSION['usuario'])) return;

include_once "conexion.php";

$accion=$_POST['accion'];
$imagen="";

$idJuego=$_POST['idJuego'];

if($accion!="borrar") {
    $nombreJuego=$_POST['nombreJuego'];
    $descripcionJuego=$_POST['descripcionJuego'];
    $unidades=$_POST['unidades'];
}

// if ($_FILES['imagenJuego']['name']!="") {
//     $archivo=$_FILES['imagenJuego']['tmp_name'];
//     $destino= "fotos/". $_FILES['imagenJuego']['name'];
//     move_uploaded_file($archivo, $destino);
//     $imagen=", imagenJuego='$destino'";
// }

if($accion=="insertar"){
    //comprobamos que el nombre y apellidos no esten en la BD
    $res = mysqli_query($con, "SELECT nombreJuego FROM juegos WHERE idJuego = '$idJuego'");
    $contar = mysqli_num_rows($res);

    if($contar>0){			//El juego ya existe
        echo 'Este juego ya existe en la BD';	
    }else{ //Añade la informacion a la tabla
        $sql = "INSERT juegos(nombreJuego,descripcionJuego, imagenJuego,unidades) VALUES ('$nombreJuego','$descripcionJuego', '$descripcionJuego',$unidades)";

        mysqli_query($con, $sql);
        echo 'Juego añadido correctamente';
    }
} 

if($accion=="modificar"){
    $sql = "UPDATE juegos SET nombreJuego='$nombreJuego',unidades=$unidades,descripcionJuego='$descripcionJuego' $imagen WHERE idJuego=$idJuego";
    mysqli_query($con, $sql);      
    echo "Juego modificado correctamente";
} 

if($accion=="borrar"){
    $sql = "SELECT unidades FROM juegos WHERE idJuego='$idJuego'";
    $res = mysqli_query($con,$sql);
    if(mysqli_num_fields($res) == 1) {
        $sql = "DELETE FROM juegos WHERE idJuego='$idJuego'";
        mysqli_query($con, $sql);
        echo "Juego eliminado correctamente";
    }else echo "Este juego no existe en la BD";
} 

include_once "cerrar_conexion.php";
//header("Location: ./juegos.php");
?>
