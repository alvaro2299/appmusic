<?php

require_once("../db/conexion.php");
function ver_ranking($db){
$sql="SELECT SUM(quantity) AS ordenado,name from track,invoiceline where track.trackid=invoiceline.trackid group by name order by  ordenado DESC;";
$a=mysqli_query($db,$sql);
$c=[];
if($a){
    while ($b=mysqli_fetch_assoc($a)) {
        $c[]=$b;
    }
}
return $c;
}
?>