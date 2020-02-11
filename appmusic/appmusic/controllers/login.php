
<?php
    session_start();
    require_once("../db/conexion.php");
    require_once("../models/credenciales.php");
    require_once("../views/views.php");
    require_once("../models/login.php");
    loguearse($db);
?>

