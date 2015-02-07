<?php
session_start();
if(!isset($_SESSION['usuario'])) return;

require('conexion.php');

$query="SELECT * FROM juegos";
$resultado=$mysqli->query($query);

?>

<html>
  <head>
    <title>Administración de juegos</title>
    <script src="../js/jquery-latest.min.js" type="text/javascript"></script>
    <link type="text/css" rel="stylesheet" media="all" href="../css/monitores.css">
  </head>
  <body>
   <?php include_once "menuAdministrador.php"; ?>
  <center><h1>Administración de juegos</h1></center>
  <div style="text-align:center;">
      <table border=0 width=80% style="margin: 0 auto;">
          <td><img width="40" title="Añadir juego" src="../imagenes/insertar.png"  onclick="javascript:anadir()" ></td>
     <script language="javascript" type="text/javascript">
     <!--

    function formJuego(id,accion){
        $.ajax({ url: "formJuego.php", data: { idJuego: id, accion:accion },
            type: "POST",
            dataType : "text",
            success: function( text ) {
                $("#centrado").html( text );
                cierra();
            },
            error: function( xhr, status, errorThrown ) {
               alert( "Error. Ocurrió algo inesperado: " + errorThrown );
            }, 
        });
    }

    function anadir(){ formJuego(0,"insertar"); }

    function modificar(id){ formJuego(id,"modificar"); }

    function borrar(id){ 
    if (confirm("¿Esta seguro de querer borrar el juego?")) {
        $.ajax({ url: "accionesJuego.php", data: { 
                    idJuego: id, 
                    accion:"borrar",
                },
                type: "POST",
                dataType : "text",
                success: function( resultado) { muestra(resultado,id,"borrar"); },
                error: function( xhr, status, errorThrown ) {
                   alert( "Error. Ocurrió algo inesperado: " + errorThrown );
                }, 
            });
        }
    }

    function res(nombre,descripcion,imagen,unidades,accion,id){
        var formdata = new FormData();
        var file=$("#imagenJuego")[0].files[0];
        formdata.append("nombreJuego", nombre);
        formdata.append("descripcionJuego", descripcion);
				formdata.append("imagenJuego", file);
        formdata.append("unidades", unidades);
        formdata.append("accion", accion);
        formdata.append("idJuego", id);
        $.ajax({ url: "accionesJuego.php",
            data: formdata,
            processData: false,
            contentType: false,
            type: "POST",
            success: function(resultado) { muestra(resultado,id,accion); },
            error: function( xhr, status, errorThrown ) {
               alert( "Error. Ocurrió algo inesperado: " + errorThrown );
            }, 
        });
    }

    function cierra(){ $("#centrado").toggle(); }

    function muestra(resultado,id,accion){
        alert(resultado);
        if(accion!="borrar") { location.reload(); }
        else{ $("#fila"+id).remove(); }
        cierra();
     }

    // -->
</script> 

<div id="centrado" style="display:none"><!--Aquí van los formularios Ajax--></diV>

<table border=1 width="80%" style="margin: 0 auto;">
    <thead>
        <tr bgcolor="#F1F1F1">
            <td><b>Nombre</b></td>
            <td><b>Descripcion</b></td>
            <td><b>Imagen</b></td>
            <td><b>Unidades</b></td>
            <td>Acciones</td>
        </tr>
        <tbody>
        <?php while($row=$resultado->fetch_assoc()){ ?>
        <tr id="fila<?php echo $row['idJuego'];?>">
            <td>
                <?php echo $row['nombreJuego'];?>
            </td>
            <td>
                <?php echo $row['descripcionJuego'];?>
            </td>
            <td>
            <?php if ($row['imagenJuego']!="") { ?>
                <img src="<?php echo $row['imagenJuego'];?>"/>
            <?php }else echo "Sin imagen"; ?>
            </td>
            <td>
                <?php echo $row['unidades'];?>
            </td>
            <td>
                <img width="40" src="../imagenes/editar.png" onclick="javascript:modificar('<?php echo $row['idJuego'];?>')" title="Modificar" alt="Modificar"/>
                <img width="40" src="../imagenes/borrar.png" onclick="javascript:borrar('<?php echo $row['idJuego'];?>')" title="Borrar" alt="Borrar"/>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </div>
</table>
</body>
</html>	

