<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
</head>

<?php

if (!isset($_POST) || empty($_POST)) { 
?>
<body>
    <h1 class="text-center">LOGIN</h1>

 <div class="container ">
        <!--Aplicacion-->
        <div id="App" class="row pt-6">
            <div class="col-md4-">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <form id="product-form" name="" action="login.php" method="POST" class="card-body">
                        <div class="form-group">
                            <input type="text" name="username" placeholder="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="password" class="form-control">
                        </div>
                       

                        <input type="submit" value="Iniciar sesion" class="btn btn-outline-info btn-inline">
                        <input type="reset" value="Borrar" class="btn btn-outline-info btn-inline ml-5">
                    </form>
                </div>
                <br>
                <div class="form-group">
                           <a href='Registro de clientes.php'> <buttom  name="login" value="O inicia sesion" class="btn btn-outline-info btn-lg btn-block">Registro</buttom></a>
                </div>

            </div>

        </div>
        <br>


    </div>

    <?php
}
else{
   //Login
    require_once("models/credenciales.php");
    require_once("views/views.php");
    $Email=$_POST['username'];
    $LastName=$_POST['password'];
    
    $conexion=conexion_correcta($Email,$LastName);

    if (mysqli_query($db,$conexion)) {
        echo "por aqui";
    }
    else {
        error_conexion();
    }
}
?>