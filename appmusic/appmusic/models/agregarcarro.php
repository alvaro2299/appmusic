<?php
session_start();

$cancion=$_POST['lista_canciones'];
$_SESSION['descargas'][]=array(
    'titulo_cancion'=>$cancion,
);
header('location:../views/downmusic.php');
?>