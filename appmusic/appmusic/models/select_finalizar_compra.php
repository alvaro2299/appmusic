<?php
session_start();
require_once('../db/conexion.php');
$precio_total=0;
$precio_unidad=0;
$comprobar=true;
$fecha=fecha_actual();
$id_orden=sacar_id($db);
$usuario=$_SESSION['conexion'];
$sql="SELECT CustomerId as id,
             Address as direccion,
             City as ciudad,
             State as estado,
             Country as pais,
             PostalCode as codigopostal
             from Customer where Email='$usuario'";
$resultado=mysqli_query($db,$sql);
if($resultado){
   while ($row=mysqli_fetch_assoc($resultado)) {
    $id=$row['id'];
    $direccion=$row['direccion'];
    $ciudad=$row['ciudad'];
    $estado=$row['estado'];
    $pais=$row['pais'];  
    $codigopostal=$row['codigopostal'];
   }
}
else {
    $comprobar=false;
};
for ($i=0; $i <sizeof($_SESSION['descargas']) ; $i++) { 
    $precio_unidad=sacar_precio($db,$i);
    $precio_total=$precio_total+$precio_unidad;

}
$total=$precio_total;
$insert="INSERT INTO invoice(invoiceId,
                            CustomerId,
                            InvoiceDate,
                            BillingAddress,
                            BillingCity,
                            BillingState,
                            BillingCountry,
                            BillingPostalCode,
                            Total) values($id_orden,
                                          $id,
                                          '$fecha',
                                          '$direccion',
                                          '$ciudad',
                                          '$estado',
                                          '$pais',
                                          '$codigopostal',
                                          $total)";
if(mysqli_query($db,$insert)){
    for ($i=0; $i <(sizeof($_SESSION['descargas'])) ; $i++) { 
    $line_id=sacarid_order_line($db);
    $id_cancion=sacarid_id_cancion($db,$i);
    insertar_order_line($db,$line_id,$id_orden,$id_cancion,$precio_unidad); 
    }
    $_SESSION['descargas']=[];
}
else{
    $comprobar=false;
}
function fecha_actual(){
    $fecha=date("Y-m-d");
    
    return $fecha;
}
function sacar_id($db){
    $sql="SELECT max(invoiceId) as id from invoice";
    $a=mysqli_query($db,$sql);
    $b=mysqli_fetch_assoc($a);
    $c=$b['id'];
    $c=$c+1;
    return $c;
}
function sacar_precio($db,$contador){
    $cancion=$_SESSION['descargas'][$contador]['titulo_cancion'];
    $sql="SELECT UnitPrice as precio from track where Name='$cancion'";
    $a=mysqli_query($db,$sql);
    $b=mysqli_fetch_assoc($a);
    $c=$b['precio'];
    return $c;
}
function sacarid_order_line($db){
    $sql="SELECT max(invoiceLineId) as id FROM invoiceLine";
    $a=mysqli_query($db,$sql);
    $b=mysqli_fetch_assoc($a);
    $c=$b['id'];
    $c=$c+1;
    return $c;
}
function sacarid_id_cancion($db,$contador){
    $cancion=$_SESSION['descargas'][$contador]['titulo_cancion'];
    $sql="SELECT trackId as id FROM Track where Name='$cancion'";
    $a=mysqli_query($db,$sql);
    $b=mysqli_fetch_assoc($a);
    $c=$b['id'];
    
    return $c;
}
function insertar_order_line($db,$invoiceline,$id_orden,$id_cancion,$precio_unidad){
    $sql="INSERT INTO InvoiceLine values($invoiceline,$id_orden,$id_cancion,$precio_unidad,1)";
    if(mysqli_query($db,$sql)){
        
    }
    else{
        $comprobar=false;
    }
}

if($comprobar){
    header('location:../views/compra_correcta.php');
}
else{
    header('location:../views/compra_incorrecta.php');
}
?>