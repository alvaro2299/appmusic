<?php
function ver_musica ($db){
$lista_musica=[];
$sql="SELECT Name,TrackId FROM TRACK";
$ver_resultado=mysqli_query($db,$sql);
if($ver_resultado){
while ($row=MYSQLI_FETCH_ASSOC($ver_resultado)) {
    $lista_musica[]=$row['Name'];
    
}
}
return $lista_musica;
}
?>