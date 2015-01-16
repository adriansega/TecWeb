<?php
  require('conexion.php');
  
  $idMonitor=$_GET['idMonitor'];
  $query="SELECT idMonitor, nombreMonitor, apellidosMonitor, descripcion, imagenMonitor FROM monitores WHERE idMonitor='$idMonitor'";
  
  $resultado=$mysqli->query($query);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html class="js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" dir="ltr" lang="es">
<head>
<title>Modificar monitores</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link type="text/css" rel="stylesheet" media="all" href="http://localhost/afim21/css/monitores.css">
</head>

<body style="background-color:#FFFFFF">
  <div id="page-wrapper">
   
         <div id="textoCuerpo">
                <!--Formulario de inserción-->
               	<h3>Modificar monitor</h3>
               	<br/>
                <?php while($row=$resultado->fetch_assoc()){ ?>
               	<form name="monitores" method="post" action="http://localhost/afim21/php/modificarMonitor.php" class="monitores" enctype="multipart/form-data">	 
                <input type="hidden" name="idMonitor" value="<?php echo $row['idMonitor'];?>">                               
								Nombre: * <input type="text" name="nombreMonitor" size="25" maxlength="50" value="<?php echo $row['nombreMonitor'];?>"><br><br>
								Apellidos: * <input type="text" name="apellidosMonitor" size="35" maxlength="100" value="<?php echo $row['apellidosMonitor'];?>"> <br><br>
								Descripción: *<br>
                <textarea cols="41" rows="4" name="descripcion" maxlength="512"><?php echo $row['descripcion'];?></textarea> <br><br>
								Foto: 
                <input type="file" name="imagenMonitor" id="imagenMonitor" value="<?php echo $row['imagenMonitor'];?>"/>
                <!-- <input type="submit" value="Cargar imagen" /> -->
								<br/><br/>			
								<input type="submit" value="Modificar monitor" name="modificar">
                <input type="Reset" value="Borrar formulario" name="borrar">	
								</form>
                <?php } ?>
								<br/><br/>
        </div> <!--textoCuerpo -->
  </div> <!-- /#page-wrapper -->

</body>
</html>

