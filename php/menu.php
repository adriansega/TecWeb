<?php
 		 							
include_once "conexion.php";
function mysqli_result($res, $row, $field=0) {
        $res->data_seek($row);
            $datarow = $res->fetch_array();
            return $datarow[$field];
} 

$pagina=basename($_SERVER["REQUEST_URI"], ".html");
if(isset($_GET['l'])){
    $_SESSION['idioma']=$_GET['l'];
}

if(!isset($_SESSION['idioma']))
    $_SESSION['idioma']='castellano';

    $sql = "select nombre from menus where idioma='$_SESSION[idioma]' and tipo=0 order by id";
$resultado = mysqli_query($con,$sql);
if (!$resultado) {
    echo 'No se pudo realizar la consulta:'.mysqli_error();
    exit;
}

$id=0;
?>


                    <div class="elementoMenuArriba">
                        <a href="afim21.html"><img src="imagenes/inicio.png" title="INICIO" alt="INICIO">
                        <div><?php echo mysqli_result($resultado,$id++); ?></div></a>                            
                    </div>                                    

                    <div class="elementoMenuArriba">
                        <a href="actividades.html"><img src="imagenes/actividades.png" title="Actividades" alt="Actividades"/>
                        <div><?php echo mysqli_result($resultado,$id++); ?></div></a>                            
                    </div>                                     

                    <div class="elementoMenuArriba">
                        <a href="horario.html"><img src="imagenes/horario.png" title="Horario" alt="Horario"/>
                        <div><?php echo mysqli_result($resultado,$id++); ?></div></a>                            
                    </div>                                                

                    <div class="elementoMenuArriba">
                        <a href="juegos.html"><img src="imagenes/noticias.png" title="Juegos" alt="Juegos"/>
                        <div><?php echo mysqli_result($resultado,$id++); ?></div></a>                            
                    </div>                                     

                    <div class="elementoMenuArriba">
                        <a href="inscripcion.html"><img src="imagenes/noticias.png" title="Contáctanos" alt="Contáctanos"/>
                        <div><?php echo mysqli_result($resultado,$id++); ?></div></a>                            
                    </div>                                     
<?php 
mysqli_free_result($resultado);
include_once "cerrar_conexion.php"; 
?>
