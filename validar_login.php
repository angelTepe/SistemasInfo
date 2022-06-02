<?php
session_start();
include "conexion.php";
$usuario = $_POST['nombre_usuario'];
$password = $_POST['password'];

$q = "SELECT COUNT(*) as contar from usuarios where nombre_usuario= '$usuario' and  password = '$password' and Permisos=2 ";
$consulta = mysqli_query($conexion,$q);
$qdos = "SELECT COUNT(*) as contar2 from usuarios where nombre_usuario= '$usuario' and password = '$password' ";
$consultados = mysqli_query($conexion,$qdos);

$array = mysqli_fetch_array($consulta);
$arraydos = mysqli_fetch_array($consultados);

if($array['contar']>0){
    
    // en la variable session se guarda el numero de cuenta esto para poder acarrearla
    $_SESSION['usermane']=$usuario;

    header("location: ./dashboard.php");
}else if($arraydos['contar2']>0){
    //Aqui va para usuario
    $_SESSION['usermane']=$usuario;
    header("location: ./dashboard_usuario.php");
}
else{
    header("location: ./login_error.php");
}
?>
