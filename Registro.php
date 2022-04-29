<?php
include('conexion.php');

session_start();
if(isset($_SESSION['nombredelusuario']))
{
	header('location: Lista.php');
}

if(isset($_POST["btnregistrar"]))
{

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];


	$sqlgrabar = "INSERT INTO login(usuario,password) values ('$nombre','$pass')";
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='index.php' </script>";
	}else 
	{
		echo "Error: ".$sql."<br>".mysql_error($conn);
	}
} 
?>