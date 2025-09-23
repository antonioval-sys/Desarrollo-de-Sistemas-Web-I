<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a71707a89a.js" crossorigin="anonymous"></script>
<link rel="shortcut icon" href="img/sello.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css" />
    <title>¡Resultados de datos!</title>
</head>
<body>
    <div class="fondo">
        <div class="resultados">
    <h1>Resultados</h1>
    <div class="datos"> 
        <p><strong>Nombre:</strong> <?php echo $_GET['name']; ?></p>
        <p><strong>Edad:</strong> <?php echo $_GET['edad']; ?></p>
        <p><strong>Ciudad:</strong> <?php echo $_GET['ciudad']; ?></p>
        <p><strong>Fecha de Nacimiento:</strong> <?php echo $_GET['nacimiento']; ?></p>
        <p><strong>Pasatiempo:</strong> <?php echo $_GET['pasatiempo']; ?></p>
    </div>
    <img src="./img/escudo.png" alt="escudo">
    <h2>Gracias por ingresar tus datos</h2>
     <div id="popUpOverlay"></div>
    <div id="popUpBox">
        <div id="box">
            <i class="fas fa-question-circle fa-5x" ></i>
            <h2>¿Quieres volver a ingresar tus datos?</h2>
            <div id="closeModal"></div>
        </div>
    </div>
    <button onclick="customAlert.render()" class="btn">¡Volver a ingresar!</button>
    <script src="js/app.js"></script>
        </div>
        </div>
    
</body>
</html>