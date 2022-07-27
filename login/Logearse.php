<?php
include('conexion.php');

session_start();
if(isset($_SESSION['nombre']))
{
	header('location: Lista.php');
}

if(isset($_POST['btningresar']))
{
	
$nombre_usuario = $_POST["user"];
$contraseña = $_POST["ps"];
		
$query = mysqli_query($conn,"SELECT * FROM usuarios WHERE nombre_usuario = '".$nombre_usuario."' and contraseña = '".$contraseña."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	$_SESSION['nombre']=$nombre;
	header("Location: Lista.php");
}
else if ($nr == 0) 
{
	echo "<script> alert('Usuario no existe');window.location= 'Registro.php' </script>";
}

} 
?>