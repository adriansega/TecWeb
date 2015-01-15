<?php
include "conexion.php";

$pagina=basename($_SERVER["REQUEST_URI"], ".html");
if(isset($_GET['l'])){
    $_SESSION['idioma']=$_GET['l'];
}

if(!isset($_SESSION['idioma']))
    $_SESSION['idioma']='castellano';

    
switch ($pagina) {
case 'quienes':
case 'equipo':
case 'estatutos':
    $sql = "select nombre from menus where idioma='$_SESSION[idioma]' and tipo=1 order by id";
    break;
default:
    $sql = "select nombre from menus where idioma='$_SESSION[idioma]' and tipo=0 order by id";
    break;
}
if ($pagina== 'quienes') $id=0;
if ($pagina== 'equipo') $id=1;
if ($pagina== 'estatutos') $id=2;

$resultado = mysqli_query($con,$sql);
if (!$resultado) {
    echo 'No se pudo realizar la consulta:'.mysqli_error();
    exit;
}

switch ($pagina) {
case 'afim21':
    $id=0;
    break;
case 'actividades':
    $id=1;
    break;
case 'horario':
    $id=2;
    break;
case 'juegos':
    $id=3;
    break;
case 'inscripcion':
    $id=4;
    break;
default:
    break;
}
?>
                <div class="caminoHormigas ">
                <a href="afim21.html">Inicio</a> 
<?php
if($pagina!='afim21'){?>
                > <a href="<?php echo $_SERVER["REQUEST_URI"];?>">
               <?php echo mysqli_result($resultado,$id);?>
                </a>
<?php } ?>
</div> 

<div> 
<a href="?l=castellano">Castellano </a> /
<a href="?l=ingles">English</a> 
</div>

<?php 
    mysqli_free_result($resultado);
include_once "cerrar_conexion.php"; 
?>
