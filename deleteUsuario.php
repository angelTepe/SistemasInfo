<?php
session_start();
include "conexion.php";
mysqli_set_charset($conexion,'utf8');
$consulta="DELETE FROM usuarios WHERE nombre_usuario ='$_POST[nombre_usuario]'"; 

mysqli_query($conexion, $consulta);
mysqli_close($conexion);
header('Location: EliminarUsuario.php');
?>
