<?php
session_start();
// Datos login
$id       = $_POST['id'];
$Titulo=	$_POST['Titulo'];
$Revision      = $_POST['Revision'];
$Autores     = $_POST['Autores'];
$fecha	=$_POST['fecha'];
$paginas=$_POST['paginas'];
$base=$_POST['base'];
$Cuartil=$_POST['Cuartil'];
$Acceso=$_POST['Acceso'];
$rut=$_POST['rut'];

require_once 'config.php';

// Insertar usuario
$sql = $conexion->prepare(
	"UPDATE `publicaciones` SET `Titulo Publicacion` = ?, `Revision` = ?, `Autores` = ? ,`Fecha` = ? `, paginas` = ?, `Bases de datos` = ?, `Cuartil` = ?,`Acceso` = ? WHERE `publicaciones`.`id` = {$id};");
$sql->bind_param( "ssssssss", $Titulo, $Revision,$Autores, $fecha,$paginas,$base,$Cuartil,$Acceso );
$sql->execute();

$Exito = "El registro del Articulo se ha realizado con éxito. ";
include_once "AdminGestorDeArticulos.php";

?>