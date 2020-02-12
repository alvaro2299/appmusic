<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center">Facturas</h1>

 <?php
 require_once("../controllers/comprobarfacturas.php");
 if (!isset($_POST) || empty($_POST)) {


 ?>
 <div class='table-responsive'>
                    <div class="card-header">
                        Mirar Historial facturas
                    </div>
                    
                        
                       
                            <table class='table '>
                            
                            <tr>
                              <th scope='col' class='table-primary'>IdOrden</th>
                              <th scope='col' class='table-secondary'>IdUsuario</th>
                              <th scope='col' class='table-success'>Fecha</th>
                              <th scope='col' class='table-danger'>Direccion</th>
                              <th scope='col' class='table-warning'>Ciudad</th>
                              <th scope='col' class='table-info'>Estado</th>
                              <th scope='col' class='table-light'>Pais</th>
                              <th scope='col' class='table-dark'>Cod.Postal</th>
                              <th scope='col' class='table-success'>Total</th>
                            </tr>
                            <?php
                            foreach ($datos as $dato) {
                                echo "<tr>";
                                    echo "<th scope='col' class='table-primary'>".$dato['InvoiceId']."</th>";
                                    echo "<th scope='col' class='table-secondary'>".$dato['CustomerId']."</th>";
                                    echo "<th scope='col' class='table-success'>".$dato['InvoiceDate']."</th>";
                                    echo "<th scope='col' class='table-danger'>".$dato['BillingAddress']."</th>";
                                    echo "<th scope='col' class='table-warning'>".$dato['BillingCity']."</th>";
                                    echo "<th scope='col' class='table-info'>".$dato['BillingState']."</th>";
                                    echo "<th scope='col' class='table-light'>".$dato['BillingCountry']."</th>";
                                    echo "<th scope='col' class='table-dark'>".$dato['BillingPostalCode']."</th>";
                                    echo "<th scope='col' class='table-success'>".$dato['Total']."</th>";
                                echo "</tr>";
                            }
                            ?>
                            </table>
                        </div>
                <div class="form-group">
                           <a href='menu.php' class='btn btn-outline-info'>Volver al menu</a>
                </div>

            

      </div>
</html>
<?php
}
?>