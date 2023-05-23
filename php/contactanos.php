<?php

include 'conexion.php';

if (isset($_POST['submit'])) {
$nombre = $_POST['nombre'];
echo $nombre;
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$comentario = $_POST['comentario'];

$sql = "INSERT INTO FORMULARIO VALUES ('1', '$nombre', $apellido, '$correo', '$comentario')";

$result = $connection->prepare($sql);
$result->execute();
$numrows = $result->fetchAll(PDO::FETCH_ASSOC);
echo $numrows;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="img/crown.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Formulario de contacto</title>
</head>

  <div class="navbar">

    <input type="checkbox" class="checkbox" id="click" hidden>

    <!-- sidebar -->
    <div class="sidebar">
        <label for="click">
            <div class="menu-icon">
                <div class="line line-1"></div>
                <div class="line line-2"></div>
                <div class="line line-3"></div>
            </div>
        </label>
    </div>
    <!-- end of sidebar -->
  
  <!--navigation-->
  <nav class="navigation">
    <div class="navigation-header">
      <h1 class="navigation-heading">PogoHotel</h1>
      
      <form class="navigation-search">
        <input type="text" class="navigation-search-input"/>
        <button class="navigation-search-btn">
          <i class="fas fa-search"></i>
        </button>
      </form>
    </div>
    
    <ul class="navigation-list">
      <li class="navigation-item">
        <a href="../index.html" class="navigation-link">Inicio</a>
      </li>
      <li class="navigation-item">
        <a href="../index.html#habitaciones" class="navigation-link">Habitaciones</a>
      </li>
      <li class="navigation-item">
        <a href="contactanos.php" class="navigation-link">contáctanos</a>
      </li>
    </li>
    <li class="navigation-item">
      <a href="trabajadores.php" class="navigation-link">trabajadores</a>
    </li>
    </ul>
    
    <div class="copyright">
      <p>&copy2023 PogoHotel. All rights reserved</p>
    </div>
  </nav>
</div>
<body class="BodyContact">
  <header class="header">
    <div class="brand">
      <h3 class="hotel-heading">Pogo Hotel</h3>
    </div>
    <h1 class="h1Contact">Formulario de contacto</h1>
  <form class="formContact" action="#" method="POST">
    <div class="form-groupContact">
      <label class="labelContact" for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>
    </div>
    <div class="form-groupContact">
      <label class="labelContact" for="apellido">Apellido:</label>
      <input type="text" id="apellido" name="apellido"required>
    </div>
    <div class="form-groupContact">
      <label class="labelContact" for="correo">Correo electrónico:</label>
      <input type="email" id="correo" name="correo" required>
    </div>
    <div class="form-groupContact">
      <label class="labelContact" for="comentario">Comentario:</label>
      <textarea class="textareaContact" id="comentario" name="comentario" maxlength="255" required></textarea>
    </div>
    <button class="buttonContact" value="submit" name="submit" type="submit">Enviar</button>
  </form>
</body>
</html>