<?php


function conexion_correcta($Email,$LastName){

    //username=email
    //clave=lastname
    $sql="SELECT customerId FROM customer where Email='$Email' and LastName='$LastName'";

    return $sql;
}



?>