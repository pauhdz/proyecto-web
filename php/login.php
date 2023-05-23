<?php

include 'conexion.php';

session_start();

error_reporting(0);

if (isset($_POST['submit'])) {
	$user = $_POST['user'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM Trabajadores WHERE UsuarioLogin = '$user' AND ContrasenaLogin = '$password'";
	$result = $connection->prepare($sql);
	$result->execute();
	$numrows = $result->fetchAll(PDO::FETCH_ASSOC);
	foreach($numrows as $obj) {
		$i++;
	}
	
	if ($i> 0) {
		header('Location: ./trabajadores.php');
	} else {
		echo "<script>alert('El usuario o password son incorrectos')</script>";
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="../css/stylelogin.css">
</head>

<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="" style="font-size: 2rem; font-weight: 800; text-align:center">Bienvenido a Pogo Hotels</p>
			<br>
			<div class="input-group">
				<input type="text" placeholder="Usuario" name="user" value="<?php echo $_POST['user']; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Constraseña" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
		
				<button name="submit" class="btn">Iniciar sesion</button>
			</div>
		</form>
	</div>
</body>
</html>

