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
<!-- Incluimos la libreria jQuery -->
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  </head>
  <style>
#centrado{
    position: absolute;
    top: 10%;
    left: 30%;
    margin-top: -50px;
    margin-left: -50px;
    width: 100px;
    height: 100px;
}
  </style>
  <body>
<?php include_once "menuAdministrador.php"; ?>

  <center><h1>Administración de monitores</h1></center>

  <div style="text-align:center;">
      <table border=0 width=70% style="margin: 0 auto;">
          <td><b><a href="javascript:anadirMonitor()" >Nuevo monitor</a></b></td>
          <p></p>
<script language="javascript" type="text/javascript">
<!--
    function cierra(){
        $("#centrado").toggle();
    }

function anadirMonitor(){
    $.get("../anadirMonitor.html", function( data ) {
        $("#centrado").html(data);
        $("#centrado").toggle();
    })
}

function borra(id){
    $.ajax({ url: "eliminarMonitor.php", data: { idMonitor: id },
        type: "GET", dataType : "text",
        success: function( text ) {
            $("#centrado").html( text );
            $("#centrado").toggle();
            location.reload();
        },
            error: function( xhr, status, errorThrown ) {
                alert( "Error. Ocurrió algo inesperado: " + errorThrown );
            }, 
    });
}

function modifica(id){
    $.ajax({ url: "modMonitor.php", data: { idMonitor: id },
        type: "GET",
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
// -->
</script> 
          <div id="centrado" style="display:none"> </diV>

          <table border=1 width="70%" style="margin: 0 auto;">
              <thead>
                  <tr bgcolor="#F1F1F1">
                      <td><b>Nombre</b></td>
                      <td><b>Apellidos</b></td>
                      <td><b>Descripcion</b></td>
                      <td><b>Imagen</b></td>
                      <td>Modificar</td>
                      <td>Borrar</td>
                  </tr>
                  <tbody>
                  <?php while($row=$resultado->fetch_assoc()){ ?>
                  <tr>
                      <td><?php echo $row['nombreMonitor'];?>
                      </td>
                      <td>
                          <?php echo $row['apellidosMonitor'];?>
                      </td>
                      <td>
                          <?php echo $row['descripcionMonitor'];?>
                      </td>
                      <td>
                          <img src="<?php echo $row['imagenMonitor'];?>"/>
                      </td>
                      <td>
                          <a href="javascript:modifica(<?php echo $row['idMonitor'];?>)">Modificar</a>  
                      </td>
                      <td>
                          <a href="javascript:borra(<?php echo $row['idMonitor'];?>)">Borrar</a>
                      </td>
                  </tr>
                  <?php } ?>
                  </tbody>
              </div>
          </table>
          </body>
          </html>	

