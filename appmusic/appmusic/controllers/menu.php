

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../db/cerrar_sesion.php" class="btn btn-outline-info">Cerrar sesion</a>
</body>
</html>
<?php
session_start();
var_dump($_SESSION['conexion']);
?>