<?php
session_start();
if(!isset($_SESSION['usuario'])) return;

require('conexion.php');

$accion=$_POST['accion'];

if ($accion=="modificar") {
    $titulo="Modificar juego";
    $idJuego=$_POST['idJuego'];

    $query="SELECT * FROM juegos WHERE idJuego='$idJuego'";
    $resultado=$mysqli->query($query);
    $row=$resultado->fetch_assoc();

    $nombreJuego=$row['nombreJuego'];
    $descripcionJuego=$row['descripcionJuego'];
    $imagenJuego=$row['imagenJuego'];
    $unidades=$row['unidades'];
}

if ($accion=="insertar") {
    $titulo="Insertar juego";
    $idJuego="";
    $nombreJuego="";
    $descripcionJuego="";
    $imagenJuego="";
    $unidades="0";
}

?>

<form name="juegos" method="post" action="accionesJuego.php" class="monitores" enctype="multipart/form-data">	 
    <h3><?php echo $titulo; ?></h3> 
    <input type="hidden" name="accion" value="<?php echo $accion;?>"> 
    <input type="hidden" name="idJuego" value="<?php echo $idJuego;?>"> 
    Nombre: * 
    <input type="text" name="nombreJuego" size="25" maxlength="50" value="<?php echo $nombreJuego;?>">
    <br><br>
    Descripción: *
    <br>
    <textarea cols="41" rows="4" name="descripcion" maxlength="512">
       <?php echo $descripcionJuego;?>
    </textarea> <br>
    Unidades: <input type="text" name="unidades" id="unidades" size="3" maxlength="3" value="<?php echo $unidades;?>" />
    <br/>			
    Foto: 
    <?php if ($imagenJuego!="") { ?>
        <img src="<?php echo $row['imagenJuego'];?>"/>
    <?php } ?>
    <input type="file" name="imagenJuego" id="imagenJuego" />
    <br/><br/>			
    <input type="button" onclick="javascript:res(nombreJuego.value,descripcion.value,imagenJuego.value,unidades.value,accion.value,idJuego.value)" 
   value="<?php echo ucfirst($accion);?> juego" >
    <input type="Reset" id="reset" value="Borrar formulario" name="borrar">	
    <input type="button" value="Cierra" onclick="javascript:cierra()"> 
</form>


