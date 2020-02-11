<?php
require_once('../models/comprobarfacturas.php');
require_once('../db/conexion.php');
$datos=sacar_facturas($db);
?>