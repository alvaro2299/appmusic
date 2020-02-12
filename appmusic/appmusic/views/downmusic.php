
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
    <h1 class="text-center">Descargar Canciones</h1>

 <?php
 session_start();
 require_once("../controllers/comprobarcanciones.php");
var_dump($_SESSION['descargas']);

 if (!isset($_POST) || empty($_POST)) {

 
 ?>
 <div class="container ">
        <!--Aplicacion-->
        <div id="App" class="row pt-6">
            <div class="col-md3-">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <form id="product-form" name="" action="../models/agregarcarro.php" method="POST" class="card-body">
                        <div class="form-group">
                        <select name="lista_canciones" id="">
                        <?php
                        foreach ($canciones as $cancion) {
                        echo "<option>$cancion</option>";
                        }
                        ?>
                        </select>
                        </div>
                        <input type="submit" value="Anadir al carro" class="btn btn-outline-info btn-inline">                       
                    </form>                  
                </div>
                <br>
        </div>
        <br>
    </div>
 <div class="container ">
        <!--Aplicacion-->
        <div id="App" class="row pt-6">
            <div class="col-md3-">
                <div class="card">
                    <div class="card-header">
                        Finalizar Compra
                    </div>                             
                        <form action="../controllers/finalizar_compra.php" class="card-body">
                            <input type="submit"  value="finalizar compra" class="btn btn-outline-info">
                        </form>
                </div>
                <br>
            </div>
        </div>
        <br>
    </div>
    <a href="menu.php" class='btn btn-outline-success'>Menu</a>
</html>
<?php
}
?>