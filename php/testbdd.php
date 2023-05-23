<?php

include 'conexion.php';

session_start();

	$user = "user1";
	$password = "12323";
	$sql = "SELECT * FROM Trabajadores WHERE UsuarioLogin = '$user' AND ContrasenaLogin = '$password'";
	$result = $connection->prepare($sql);
	$result->execute();
	$res=array();
	$numrows = $result->fetchAll(PDO::FETCH_ASSOC);
	echo "<script>alert('$numrows')</script>";
	//$result = $connection->query($sql);
	
	if ($numrows > 0) {
		header('Location: ./trabajadores.php');
	} else {
		echo "<script>alert('El usuario o password son incorrectos')</script>";
	}

?>