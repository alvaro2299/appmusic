<?php
function loguearse($db){
    
    require_once("../views/formulario.php");
    require_once("/credenciales.php");
    $Email=$_POST['username'];
    $LastName=$_POST['password'];
    $conexion=conexion_correcta($db,$Email,$LastName);
    if (!($conexion==null)) {
       $_SESSION['conexion']=$Email;
       header("location:../views/menu.php");
    }
    else {
        error_conexion();
    }
}   
?>