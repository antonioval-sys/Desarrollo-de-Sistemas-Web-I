<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/a71707a89a.js" crossorigin="anonymous"></script>
<link rel="shortcut icon" href="img/sello.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css" />
    <title>Captura de Datos</title>
</head>

<body>
    <div class="fondo">
        <div class="inicio">
            <h1>
                Captura de datos personales
            </h1> <BR>
            <h2>Ingresa los datos que te piden</h2> <br>
            <p>Mi primera encuesta</p>
        </div>
        <div class="formulario">
            <form action="resultados.php" method="get">
                <label for="name">Nombre: </label>
                <input type="text" id="name" name="name" placeholder="Ingresa tu nombre" required>
                <hr class="linea1">
                <label for="edad">Edad: </label>
                <input type="number" id="edad" name="edad" placeholder="Tu edad" min="0" max="120" required>
                <hr class="linea2">
                <label for="ciudad">Ciudad Donde Vives: </label>
                <input type="text" id="ciudad" name="ciudad" placeholder="Ingresa tu ciudad donde vives" required>
                <hr class="linea3">
                <label for="nacimiento">Fecha de Nacimiento: </label>
                <input class="fecha" type="date" id="nacimiento" name="nacimiento" required>
                <hr class="linea4">
                <label for="pasatiempo">Pasatiempo Favorito: </label>
                <input type="text" id="pasatiempo" name="pasatiempo" placeholder="Ingresa tu pasatiempo favorito" required>
                <hr class="linea5">
                <div class="botonclas">
                    <button type="submit">¡Ingresamos datos!</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>