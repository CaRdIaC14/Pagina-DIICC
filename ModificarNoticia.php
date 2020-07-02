<?php
session_start();
// Datos login
$id       = $_POST['id'];
$titulo       = $_POST['titulo'];
$descripcion     = $_POST['descripcion'];
$img   = $_POST['img'];

require_once 'config.php';

// Insertar usuario
$sql = $conexion->prepare(
	"UPDATE `noticias` SET `titulo` = ?, `descripcion` = ? WHERE `noticias`.`id` = {$id};"
);
$sql->bind_param( "ss", $titulo, $descripcion);
$sql->execute();

$Exito = "El registro del noticias se ha realizado con éxito. ";
include_once "AdminGestorDeNoticias.php";

?>