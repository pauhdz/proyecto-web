<?php

include 'conexion.php';

//$sql = "SELECT ID_Empleado, Nombre, PrimerApellido, SegundoApellido, Genero, Id_Departamento, FechaDeNacimiento, Cargo, DNI, Salario, Fecha_De_Contratacion, Residencia, Email, NumTelef  FROM Trabajadores";
$sql = "SELECT *  FROM Trabajadores";
$result = $connection->prepare($sql);
$result->execute();
$totalrows = array();
$totalrows = $result->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/trabajadores.css">
    <title>Trabajadores</title>
</head>
<body>
  <h1 class="titulardo">Trabajadores</h1>
<br>
    <br>
    <br>
<table>
  <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Segundo Apellido</th>
    <th>Género</th>
    <th>Id Departamento</th>
    <th>Cargo</th>
    <th>DNI</th>
    <th>Salario</th>
    <th>Fecha De Contratacion</th>
    <th>Residencia</th>
    <th>Email</th>
    <th>Núm.Teléfono</th>
    <th>Fecha De Nacimiento</th>
  </tr>
<?php 
    foreach($totalrows as $obj) { ?>
  <tr>
    <td><?php echo $obj['ID_EMPLEADO'];?></td>
    <td><?php echo $obj['NOMBRE'];?></td>
    <td><?php echo $obj['PRIMERAPELLIDO'];?></td>
    <td><?php echo $obj['SEGUNDOAPELLIDO'];?></td>
    <td><?php echo $obj['GENERO'];?></td>
    <td><?php echo $obj['ID_DEPARTAMENTO'];?></td>
    <td><?php echo $obj['CARGO'];?></td>
    <td><?php echo $obj['DNI'];?></td>
    <td><?php echo $obj['SALARIO'];?></td>
    <td><?php echo $obj['FECHA_DE_CONTRATACION'];?></td>
    <td><?php echo $obj['RESIDENCIA'];?></td>
    <td><?php echo $obj['EMAIL'];?></td>
    <td><?php echo $obj['NUMTELEF'];?></td>
    <td><?php echo $obj['FECHADENACIMIENTO'];?></td>
  </tr>
   <?php }
?>
</table>
</body>
</html>