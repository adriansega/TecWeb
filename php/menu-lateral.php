<?php
include_once "conexion.php";

if(isset($_GET['l'])){
    $_SESSION['idioma']=$_GET['l'];
}

if(!isset($_SESSION['idioma']))
    $_SESSION['idioma']='castellano';

$sql = "select nombre from menus where idioma='$_SESSION[idioma]' and tipo=1 order by id";

$resultado = mysqli_query($con,$sql);
if (!$resultado) {
    echo 'No se pudo realizar la consulta:'.mysqli_error();
    exit;
}

$id=0;
?>

    <div id="menuSecundario">
        <div class="elementoMenuSecundario"> <a href="quienes.html" alt="Quienes Somos"><img src="imagenes/social.png" alt="Quienes Somos"/>
    <?php echo mysqli_result($resultado,$id++); ?>
</a></div>
        <div class="elementoMenuSecundario"> <a href="equipo.html" alt="Equipo"><img src="imagenes/datos_0.gif" alt="Equipo"/>
    <?php echo mysqli_result($resultado,$id++); ?>
</a></div>
        <div class="elementoMenuSecundario"> <a href="mision.html" alt="Mision"><img src="imagenes/MISION.gif" alt="Mision"/>
    <?php echo utf8_encode(mysqli_result($resultado,$id++)); ?>
</a></div>
    </div>
<p id="textoBlog"> <?php echo utf8_encode('Visítanos en:')?><br /><br /></p>
<div id="logoBlog"><a href="http://afim21.blogspot.com.es/" target="_blank"><img src="imagenes/blogspot.gif" alt="blog"/></a></div> 
<div id="logoFacebook"><a href="https://www.facebook.com/Afim21" target="_blank"><img src=   	  	                        "imagenes/logoFacebook.png" alt="blog"/></a></div>
</div> 

<?php 
mysqli_free_result($resultado);
include_once "cerrar_conexion.php"; 
?>
