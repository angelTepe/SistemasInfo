<?php
//conexion a la base dato
session_start();
include "conexion.php";
mysqli_set_charset($conexion,'utf8');
$consulta="UPDATE usuarios
SET nombre='$_POST[nombre]', direccion='$_POST[direccion]', 
telefono='$_POST[telefono]', correo='$_POST[correo]', 
nombre_usuario='$_POST[nombre_usuario]', password='$_POST[password]'
WHERE nombre_usuario='$_POST[nombre_usuario_modificar]' "; 
mysqli_query($conexion, $consulta);
mysqli_close($conexion);
header('Location: form_registro_Modificar.php');

?>
