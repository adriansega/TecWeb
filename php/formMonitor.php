<?php
session_start();
if(!isset($_SESSION['usuario'])) return;

require('conexion.php');

$accion=$_POST['accion'];

if ($accion=="modificar") {
    $titulo="Modificar monitor";
    $idMonitor=$_POST['idMonitor'];

    $query="SELECT * FROM monitores WHERE idMonitor='$idMonitor'";
    $resultado=$mysqli->query($query);
    $row=$resultado->fetch_assoc();

    $idMonitor=$row['idMonitor'];
    $nombreMonitor=$row['nombreMonitor'];
    $descripcionMonitor=$row['descripcionMonitor'];
    $imagenMonitor=$row['imagenMonitor'];
    $apellidosMonitor=$row['apellidosMonitor'];
}

if ($accion=="insertar") {
    $titulo="Insertar monitor";
    $idMonitor="";
    $nombreMonitor="";
    $descripcionMonitor="";
    $imagenMonitor="";
    $apellidosMonitor="";
}

?>

<form name="monitores" method="post" action="accionesMonitor.php" class="monitores" enctype="multipart/form-data">	 
    <input type="hidden" name="accion" value="<?php echo $accion;?>"> 
    <input type="hidden" name="idMonitor" value="<?php echo $idMonitor;?>">                                <h3><?php echo $titulo; ?></h3>
    Nombre: * 
    <input type="text" name="nombreMonitor" size="25" maxlength="50" value="<?php echo $nombreMonitor;?>"><br><br>
    Apellidos: * 
     <input type="text" name="apellidosMonitor" size="35" maxlength="100" value="<?php echo $apellidosMonitor;?>"> <br><br>
    Descripción: *
    <br>
    <textarea cols="41" rows="4" name="descripcion" maxlength="512">
       <?php echo $descripcionMonitor;?>
    </textarea> <br><br>
    Foto: 
    <?php if ($imagenMonitor!="") { ?>
        <img src="<?php echo $row['imagenMonitor'];?>"/>
    <?php } ?>
    <input type="file" name="imagenMonitor" id="imagenMonitor"/>
    <br/><br/>			
    <input type="submit" value="<?php echo ucfirst($accion);?> monitor" >
    <input type="Reset" id="reset" value="Borrar formulario" name="borrar">	
    <input type="button" value="Cierra" onclick="javascript:cierra()"> 
</form>


