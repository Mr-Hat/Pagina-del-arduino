<?php
include("conexion_general.php");
$consulta = "SELECT * FROM mascotas";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Mascotas</title>
    <link rel="stylesheet" href="">
    <link rel="icon" href="https://media.discordapp.net/attachments/959570367675002905/959932714801328258/unknown.png">
    <a href=""></a>
</head>
<style>
table {
    

}
</style>
    <body>
        <div id="Mascota">
        <br><h1>Kit mascota</h1>
        <br><h2>Mascotas</h2>
        <table>
            <tr>
                <center><th>id</th></center>
                <center><th>Nombre</th></center>
                <center><th>Fecha nacimiento</th></center>
                <center><th>Especie</th></center>
            </tr>
            <?php 
            $datos = mysqli_query ($conn,$consulta);
            while ($fila=mysqli_fetch_array($datos)){
                echo "<tr>";
                echo "<td>";
                    echo $fila["id"];
                echo "</td>";
                echo "<td>";
                    echo $fila["nombre"];
                echo "</td>";
                echo "<td>";
                    echo $fila["fecha_nac"];
                echo "</td>";
                echo "<td>";
                    echo $fila["especie"];
                echo "</td>";
                echo "</tr>";
            } 
            ?>
        </table>
        </div>
    </body>
</html>