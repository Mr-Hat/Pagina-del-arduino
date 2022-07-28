<?php
include('conexion_general.php');

session_start();
if(isset($_SESSION['user']))
{
	header('location: Lista.php');
}

if(isset($_POST["btnregistrar"]))
{

$contraseña = $_POST["ps"];
$nombre_usuario = $_POST["user"];
$nombre = $_POST["nombre"]; 
$apellido_paterno = $_POST["ap"]; 
$apellido_materno = $_POST["am"]; 
$correo = $_POST["email"]; 

$sqlgrabar = "INSERT INTO usuarios(contraseña,nombre_usuario,nombre,apellido_paterno,apellido_materno,correo) values ('$contraseña','$nombre_usuario','$nombre','$apellido_paterno','$apellido_materno','$correo')";
	
if(mysqli_query($conn,$sqlgrabar)){
	echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='Registro.php' </script>";
}else 
{
	echo "Error: ".$sql."<br>".mysqli_error($conn);
}
} 
?>
