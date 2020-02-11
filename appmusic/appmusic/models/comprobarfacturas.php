<?php
session_start();
function sacar_facturas($db){
$email=$_SESSION['conexion'];
$sql1="SELECT CustomerId as id from customer where Email='$email'";
$a=mysqli_query($db,$sql1);
$b=mysqli_fetch_assoc($a);
$c=$b['id'];

$sql2="SELECT * FROM INVOICE WHERE CustomerId=$c";
$c1=[];
$resultado=mysqli_query($db,$sql2);
if($resultado){
while ($b1=mysqli_fetch_assoc($resultado)) {
    $c1[]=$b1;
}
}
else{
    echo 'mal';
}
return $c1;

}

?>