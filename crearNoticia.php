<?php
session_start();
// Datos login
$titulo       = $_POST['Titulo'];
$descripcion     = $_POST['descripcion'];
$img   = $_POST['img'];

require_once 'config.php';

// Insertar usuario
$sql = $conexion->prepare(
   "INSERT INTO `noticias` (`id`, `titulo`, `fecha`, `descripcion`, `imagen`, `correo`) 
    VALUES (NULL, ? , current_timestamp(), ?, ?, '{$_SESSION["USUARIO"]}');"
);
$sql->bind_param( "sss", $titulo, $descripcion, $img );
$sql->execute();

$Exito = "El registro del noticias se ha realizado con éxito. ";
include_once "AdminGestorDeNoticias.php";

?>