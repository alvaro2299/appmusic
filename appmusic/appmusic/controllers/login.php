
<?php
    session_start();
    require_once("../db/conexion.php");
    require_once("../models/credenciales.php");
    require_once("../views/views.php");
    require_once("../views/formulario.php");
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
?>

