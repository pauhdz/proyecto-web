<?php

include 'conexion.php';

$sql = "SELECT ID, Nombre, Apellido, SegundoApellido, Genero, Id_Departamento, Cargo, DNI, Salario, FechaDeContratacion, Residencia, Email, NumTelefono, FechaDeNacimiento FROM trabajadores";
$result = $conn->query($sql);
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
    <th>Id_Departamento</th>
    <th>Cargo</th>
    <th>DNI</th>
    <th>Salario</th>
    <th>FechaDeContratacion</th>
    <th>Residencia</th>
    <th>Email</th>
    <th>Núm.Teléfono</th>
    <th>FechaDeNacimiento</th>
  </tr>
<?php if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) { ?>
  <tr>
    <td><?php echo $row["ID"]?></td>
    <td><?php echo $row["Nombre"]?></td>
    <td><?php echo $row["Apellido"]?></td>
    <td><?php echo $row["SegundoApellido"]?></td>
    <td><?php echo $row["Genero"]?></td>
    <td><?php echo $row["Id_Departamento"]?></td>
    <td><?php echo $row["Cargo"]?></td>
    <td><?php echo $row["DNI"]?></td>
    <td><?php echo $row["Salario"]?></td>
    <td><?php echo $row["FechaDeContratacion"]?></td>
    <td><?php echo $row["Residencia"]?></td>
    <td><?php echo $row["Email"]?></td>
    <td><?php echo $row["NumTelefono"]?></td>
    <td><?php echo $row["FechaDeNacimiento"]?></td>
  </tr>
   <?php }
} else {
    echo "No se encontraron resultados";
}
?>
</table>
</body>
</html>