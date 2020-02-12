<?php
session_start();
require_once("../models/ranking.php");
require_once("../db/conexion.php");
$datos=ver_ranking($db);
require_once("../views/ranking.php");

?>