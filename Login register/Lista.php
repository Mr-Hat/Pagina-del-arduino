<link rel="stylesheet" href="index.css">

<table>
<?php
include('conexion.php');
session_start();

if(isset($_SESSION['user']))
{
	$usuarioingresado = $_SESSION['user'];
	echo "<tr><td colspan='2' align='center'><h1>Bienvenido: $usuarioingresado </h1></td></tr>";
}
else
{
	header('location: Logearse.php');
}
?>
<form method="POST">
<tr><td colspan='2' align="center"><input type="submit" value="Cerrar sesión" name="btncerrar" /></td></tr>
</form>

<tr><td colspan="2"><h1>Listado de usuarios</h1></td></tr>
<tr>
	<td><label>nombre</label></td>
	<td><label>apellido paterno</label></td>
	<td><label>apellido materno</label></td>
	<td><label>Usuario</label></td>
	<td><label>correo</label></td>
	<td><label>Contraseña</label></td>
</tr>

<?php 

if(isset($_POST['btncerrar']))
{
	session_destroy();
	header('location: Logearse.php');
}
	
$sql="SELECT * FROM usuarios";
$result=mysqli_query($conn,$sql);

while($mostrar=mysqli_fetch_array($result)){
	
?>
<tr>
	<td><?php echo $mostrar['nombre']?>
	<td><?php echo $mostrar['ap']?>
	<td><?php echo $mostrar['am']?>	
	<td><?php echo $mostrar['user']?>
	<td><?php echo $mostrar['email']?>
	<td><?php echo $mostrar['ps']?>
</tr>
<?php
}

?>
</table>



<!---->