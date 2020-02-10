<?php


function conexion_correcta(){

    //username=email
    //clave=lastname
    $sql="SELECT customerId FROM customer where Email='$Email' and LastName='$LastName'";

    return $sql;
}



?>