<?php
session_start();
if(!isset($_SESSION['usuario'])) return;

require('conexion.php');

$query="SELECT * FROM monitores";
$resultado=$mysqli->query($query);

?>

<html>
  <head>
    <title>Administración de monitores</title>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <link type="text/css" rel="stylesheet" media="all" href="../css/monitores.css">
  </head>
  <body>
   <?php include_once "menuAdministrador.php"; ?>
  <center><h1>Administración de monitores</h1></center>
  <div style="text-align:center;">
      <table border=0 width=80% style="margin: 0 auto;">
          <td><img width="40" title="Añadir monitor" src="../imagenes/insertar.png"  onclick="javascript:anadir()" ></td>
     <script language="javascript" type="text/javascript">
     <!--

    function accionMonitor(url,id,accion){
        $.ajax({ url: url, data: { idMonitor: id, accion:accion },
            type: "POST",
            dataType : "text",
            success: function( text ) {
                $("#centrado").html( text );
                $("#centrado").toggle();
            },
            error: function( xhr, status, errorThrown ) {
               alert( "Error. Ocurrió algo inesperado: " + errorThrown );
            }, 
        });
    }

    function anadir(){ accionMonitor("formMonitor.php",0,"insertar"); }

    function modificar(id){ accionMonitor("formMonitor.php",id,"modificar"); }

    function borrar(id){ if (confirm("¿Esta seguro de querer borrar al monitor?")) accionMonitor("accionesMonitor.php",id,"borrar"); }

    function cierra(){ $("#centrado").toggle(); }

    // -->
</script> 

<div id="centrado" style="display:none"><!--Aquí van los formularios Ajax--></diV>

<table border=1 width="80%" style="margin: 0 auto;">
    <thead>
        <tr bgcolor="#F1F1F1">
            <td><b>Nombre</b></td>
            <td><b>Apellidos</b></td>
            <td><b>Descripcion</b></td>
            <td><b>Foto</b></td>
            <td>Accciones</td>
        </tr>
        <tbody>
        <?php while($row=$resultado->fetch_assoc()){ ?>
        <tr>
            <td>
                <?php echo $row['nombreMonitor'];?>
            </td>
            <td>
                <?php echo $row['apellidosMonitor'];?>
            </td>
            <td>
                <?php echo $row['descripcionMonitor'];?>
            </td>
            <td>
            <?php if ($row['imagenMonitor']!="") { ?>
                <img src="<?php echo $row['imagenMonitor'];?>"/>
            <?php }else echo "Sin foto"; ?>
            </td>
            <td>
                <img width="40" src="../imagenes/editar.png" onclick="javascript:modificar(<?php echo $row['idMonitor'];?>)" title="Modificar" alt="Modificar"/>
                <img width="40" src="../imagenes/borrar.png" onclick="javascript:borrar(<?php echo $row['idMonitor'];?>)" title="Borrar" alt="Borrar"/>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </div>
</table>
</body>
</html>	

