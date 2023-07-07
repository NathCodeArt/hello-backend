<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/metodo-get.css">
    <link real="icon" href="img/isotipo-page.ico">
    <title>Tu edad exacta</title>
</head>
<body>
    <a href="index.html#section-respuestas">   
        <img class="home" src="img/home.svg" alt="home">
    </a>
    <h1>formulario</h1>
    <div class="main-frame-cal">
        <form action="" method="GET">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingrese sus nombres" pattern="[A-Za-z\s]+" title="Ingrese solo letras y espacios" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Ingrese sus apellidos" pattern="[A-Za-z\s]+" title="Ingrese solo letras y espacios" required>
            </div>
            <div class="form-group">
                <label for="documento">Tipo de documento</label>
                <!--selecion de identificación-->
                <select name="documento" class="form-control" id="documento" required>
                    <option value=""></option>
                    <option value="cedula">Cédula</option>
                    <option value="tarjeta">Tarjeta de Identidad</option>
                    <option value="pasaporte">Pasaporte</option>
                </select>
            </div>
            <div class="form-group">
                <label for="identificacion">Número de identificación</label>
                <input type="text" name="identificacion" class="form-control" id="identificacion" placeholder="Ingrese su número de identificación" pattern="[0-9]+" title="Ingrese solo números" required>
                <small id="identificacionHelp" class="form-text text-muted">No se permiten los caracteres "." y "-".</small>
            </div>
            <button type="submit" name="verificar" class="btn btn-outline-info">Enviar</button>
        </form>

        <?php
        if(isset($_GET['verificar'])){
            $nombre = $_GET['nombre'];
            $apellido = $_GET['apellido'];
            $documento = $_GET['documento'];
            $identificacion = $_GET['identificacion'];

            // Validar caracteres "." y "-"
            if (strpos($identificacion, '.') !== false || strpos($identificacion, '-') !== false) {
                echo "<div class='alert alert-danger' role='alert'>El número de identificación no puede contener los caracteres '.' o '-'</div>";
            } else {
                echo "<div class='alert alert-success' role='alert'>";
                echo "<p><strong>Nombre:</strong> $nombre</p>";
                echo "<p><strong>Apellido:</strong> $apellido</p>";
                echo "<p><strong>Tipo de documento:</strong> $documento</p>";
                echo "<p><strong>Número de identificación:</strong> $identificacion</p>";
                echo "</div>";
            }
        }
        ?>
    </div>
</body>
</html>
