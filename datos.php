<?php  
    include 'db/conexion.php'
    $query = mysqli_query($conexion,"SELECT * FROM usuarios");
    $query2 = mysqli_query($conexion, "SELECT cedula FROM usuarios");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- CDN BOOTSTRAP -->
    <link rel="stylesheet" href="css/style_datos.css">
    <link real="icon" href="img/isotipo-page.ico">
    <title>Base de datos</title>
</head>
<body>
<a href="index.html#section-respuestas">   
        <img class="home" src="img/home.svg" alt="home">
    </a>
    <div class="wrapper">
    <div class="container">
        <div class="filter">
        <div class="row">
            <div class="col-sm-4">
            <div class="show-row">
                <section class="form-control">
                <option value="5" selected="selected">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                </section>
            </div>
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
            <div class="search-row">
                <input type="text" name="search" class="form-control" placeholder="Enter your keyword">
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
        <table id="music" class="table table-responsive table-hover">
            <thead>
            <tr class="my-head">
                <th>#</th>
                <th>id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cédula</th>
            </tr>
            </thead>
            <tbody>

             <?php

            while ($datos = mysqli_fetch_array($query)) {
                $id = $datos['id'];
                $nombre = $datos['nombre'];
                $apellido = $datos['apellido'];
                $cedula = $datos['cedula'];

                echo'
                <tr data-url="FQS7i2z1CoA">
                    <td></td>
                    <td>'.$id.'</td>
                    <td>'.$nombre.'</td>
                    <td>'.$apellido.'</td>
                    <td>'.$cedula.'</td>
                </tr>
                ';        
            }
            ?>

            </tbody>
        </table>
        <div class="text-center-controller">
           <ul class="pagination"></ul> 
        <ul class="page">
        <li><a href="javascript:void(0)" class="prev">Previous</a></li>
        <li><a href="javascript:void(0)" class="next">Next</a></li>
        </ul>
        </div>

        </div>
        </div>

            <h1>Fromilario de insert</h1>
        <form action="back/almacenar_datos.php" method="POST">
            <input type="text" name="nombre" placeholder="Digite el nombre">
            <input type="text" name="apellido" placeholder="Digite el apellido">
            <input type="number" name="cedula" placeholder="Digite el numero de la cedula">
            <input type="submit" name="almacenar" value="guardar">
        </form>

        <h1>Fromulario de update</h1>
        <form action="" method="POST">
            <select name="id_consulta">
            <?php
            while ($datos2 = mysqli_fetch_array($query2)){
                $cedula_query = $datos2['cedula'];
                echo'
                <option value="'.$cedula_query.'">'.$cedula_query.'</option>
                ';
            }
            ?>
            </select>
            <input type="submit" name="buescar" value="buscar">
        </form>
</body>
</html>