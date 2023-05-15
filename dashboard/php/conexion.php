<?php
// Conexión a la base de datos
$server = "127.0.0.1";
$username = "root";
$pass = "";
$dbname = "pogo_hoteles";

$conn = mysqli_connect($server, $username, $pass, $dbname);

// Comprobar conexión
if (!$conn) {
    die("<script>alert('Connection Failed')</script>");
}

