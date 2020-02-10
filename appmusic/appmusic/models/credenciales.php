<?php
require_once("../db/conexion.php");

function conexion_correcta($db,$Email,$LastName){
    //username=email
    //clave=lastname
    $sql="SELECT customerId as correcto FROM customer where Email='$Email' and LastName='$LastName'";
    $a=mysqli_query($db,$sql);
    $b=mysqli_fetch_assoc($a);
    $c=$b['correcto'];

    return $c;
}



?>