<?php

$hotsdb = "localhost";
$basededatos = "afim21";
$usuariodb = "admin";
$clavedb= "1234";


$mysqli=new mysqli($hotsdb,$usuariodb,$clavedb,$basededatos); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos

if(mysqli_connect_errno()){
    echo 'Conexion Fallida : ', mysqli_connect_error();
    exit();
}

$con = mysqli_connect("$hotsdb","$usuariodb","$clavedb")
    or die ("Conexión denegada, el Servidor de Base de datos que solicitas NO EXISTE");
$db = mysqli_select_db($con,$basededatos) or die ("La Base de Datos <b>$basededatos</b> NO EXISTE");

$acentos = $mysqli->query("SET NAMES 'utf8'");

?>
