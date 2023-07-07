<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/edad-exacta.css">
    <link real="icon" href="img/isotipo-page.ico">
    <title>Edad exacta</title>
</head>
<body>
    <a href="index.html#section-respuestas">
        <img class="home" src="img/home.svg" alt="home">
    </a>
    <h1>Tu tiempo en la Tierra</h1>
    <div class="main-frame-cal">
    <form method="POST">
        <div class="form-group">
            <label for="fechaNacimiento">Seleccione su fecha de nacimiento:</label>
            <input type="date" name="fecha_nacimiento" class="form-control" id="fechaNacimiento">
        </div>
        
        <button type="submit" name="verificar" class="btn btn-outline-info">Enviar</button>
    </form>
    <?php
    if (isset($_POST['verificar'])) {
        $fecha_nacimiento = new DateTime($_POST['fecha_nacimiento']);
        $fecha_actual = new DateTime();

        $diferencia = $fecha_nacimiento->diff($fecha_actual);

        $edad_actual = $diferencia->y;
        $edad_meses = $diferencia->m;
        $edad_dias = $diferencia->d;

        if ($edad_actual >= 18) {
            echo '<div class="mensaje mensaje-exitoso">Eres mayor de edad.</div>';
        } else {
            $fecha_mayoria_edad = $fecha_nacimiento->add(new DateInterval('P18Y'));
            $diferencia_mayoria_edad = $fecha_actual->diff($fecha_mayoria_edad);

            $tiempo_falta = $diferencia_mayoria_edad->y;
            $meses_faltantes = $diferencia_mayoria_edad->m;
            $dias_faltantes = $diferencia_mayoria_edad->d;

            echo '<div class="mensaje mensaje-error">Eres menor de edad.<br> Te faltan '.$tiempo_falta.' años, '.$meses_faltantes.' meses y '.$dias_faltantes.' días <br>para alcanzar la mayoría de edad.</div>';
        }
    }
    ?>
    </div>
</body>
</html>