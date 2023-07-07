<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- CDN BOOTSTRAP -->
    <link rel="stylesheet" href="css/calculadora.css">
    <link real="icon" href="img/isotipo-page.ico">
    <title>Calculadora</title>
</head>
<body>
    <a href="index.html#section-respuestas">   
        <img class="home" src="img/home.svg" alt="home">
    </a>
    <h1>No te preocupes si no sabes matemáticas, usa esta calculadora</h1>
    <div class="main-frame-cal">
    <form action="" method="POST">
        <div class="form-group">
            <label for="form-control-input-1">Número 1:</label>
            <input type="number" name="n1" class="form-control" id="form-control-input-1" placeholder="Digite Número 1">
        </div>
        <div class="form-group">
            <label for="form-control-input-2">Número 2:</label>
            <input type="number" name="n2" class="form-control" id="form-control-input-2" placeholder="Digite número 2">
        </div>
        <div class="form-group">
            <label for="form-control-select-1">Seleccione la operación:</label>
            <select class="form-control" name="tipo" id="form-control-select-1">
                <option value=""></option>
                <option value="1">Suma</option>
                <option value="2">Resta</option>
                <option value="3">Multiplicación</option>
                <option value="4">División</option>
            </select>
        </div>
        <button type="submit" name="operar" class="btn btn-outline-info">Resultado</button>
    </form>

    <?php
        $n1 = $n2 = $tipo = $result = 0;
        
        if (isset($_POST['operar'])) {
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $tipo = $_POST['tipo'];

            switch ($tipo) {
                case '1':
                    $result = $n1 + $n2;
                    break;
                case '2':
                    $result = $n1 - $n2;
                    break;
                case '3':
                    $result = $n1 * $n2;
                    break;
                case '4':
                    if ($n2 != 0 && $n1 != 0) {
                        $result = $n1 / $n2;
                    } else {
                        echo "<h1 class='error'>No se puede dividir por cero.<br>Coloca otras cifras.</h1>";
                    }
                    break;
            }
            if ($tipo != '4') {
                echo "<h1 class='resultado'>Su resultado es: " . $result . "</h1>";
                // echo "<script>alert('" . $result . "');</script>";
            }
        }            
    ?>
    </div>
</body>
</html>