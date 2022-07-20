<?php
include("conexion_general.php");
?>
<?
$id = (int) $_POST["id"];
$nombre = utf8_decode($_POST["nombre"]);
$fecha_nac = utf8_decode($_POST["fecha_nac"]);
$especie = utf8_decode($_POST["especie"]);
$sql = "INSERT INTO mascotas (id, nombre, fecha_nac, especie) VALUES ($id, "$nombre", "$fecha_nac","$especie")";
if(mysqli_query($conn, $sql)){
    echo "El registro se ingreso correctamente!";
} else{
    echo "Erro: " .$sql. ":-" . mysqli_error($conn);
}
mysqli_close($conn);
?>
<br>
<a href="http://localhost/mascotas/kit_mascotas.php">ir a</a>