<?php
$servername = "localhost";
$username = "root";
$password = "g1234";
$dbname = "Gestion_del_hogar";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

?>