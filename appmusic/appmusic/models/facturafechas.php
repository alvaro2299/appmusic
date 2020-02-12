<?php

require_once("../views/formulario.php");
require_once("../db/conexion.php");
session_start();
function mirar_facturas($db){


    $email=$_SESSION['conexion'];
$sql1="SELECT CustomerId as id from customer where Email='$email'";
$a=mysqli_query($db,$sql1);
$b=mysqli_fetch_assoc($a);
$c=$b['id'];



    $fecha1=$_POST['fecha1'];
    $fecha2=$_POST['fecha2'];
    $sql="SELECT * FROM invoice where invoicedate>'$fecha1' and invoicedate<'$fecha2' and CustomerId=$c";
$c1=[];
$a1=mysqli_query($db,$sql);
if($a1){
    while ($b1=mysqli_fetch_assoc($a1)) {
        $c1[]=$b1;
    }
}
return $c1;
}
?>