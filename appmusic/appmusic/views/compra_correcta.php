
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
</head>
<body>
<h1 class='text-center'>Compra realizada con exito</h1> 

 <?php
 session_start();
 ?>
 <div class="container ">
        <!--Aplicacion-->
        <div id="App" class="row pt-6">
            <div class="col-md3-">
             
                <div class="card">
                   <a href="downmusic.php" class='btn btn-outline-success'>Volver a comprar</a>
                   <a href="menu.php" class='btn btn-outline-success'>Menu</a>
                               
                </div>
                <br>
        </div>
        <br>
    </div>

</html>
