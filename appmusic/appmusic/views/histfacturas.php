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
    <h1 class="text-center">LOGIN</h1>

 <?php
 require_once("../controllers/comprobarfacturas.php");
 if (!isset($_POST) || empty($_POST)) {
     
 
 ?>
 <div class="container ">
        <!--Aplicacion-->
        <div id="App" class="row pt-6">
            <div class="col-md4-">
                <div class="card">
                    <div class="card-header">
                        Mirar Historial facturas
                    </div>
                    
                        <div class="form-group">
                        <select name="" id="" class='form-group'>
                            <?php
                            foreach ($datos as $dato ) {
                                echo "<option>$dato</option>";
                            }
                            ?>
                        </select>
                            
                        </div>
                      
                       

                        
                    
                </div>
                <br>
                <div class="form-group">
                           <a href='menu.php' class='btn btn-outline-info'>Volver al menu</a>
                </div>

            </div>

        </div>
        <br>
    </div>
</html>
<?php
}
?>