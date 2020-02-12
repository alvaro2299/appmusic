<?php

require_once("../models/facturafechas.php");
$datos=mirar_facturas($db);
require_once("../views/facturas.php");

?>