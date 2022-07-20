<?php
include("conexion_general.php");
$consulta = "SELECT * FROM distancias";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Distancias</title>
    <link rel="stylesheet" href="">
    <link rel="icon" href="https://media.discordapp.net/attachments/959570367675002905/959932714801328258/unknown.png">
    <a href=""></a>
</head>
<style>
table {
    

}
</style>
    <body>
        <div id="distancias">
        <br><h1>Kit distancia</h1>
        <br><h2>Distancia</h2>
        <table>
            <tr>
                <center><th>ID medición</th></center>
                <center><th>Fecha</th></center>
                <center><th>Hora</th></center>
                <center><th>Distancia</th></center>
                <center><th>Evento</th></center>
            </tr>
            <?php 
            $datos = mysqli_query ($conn,$consulta);
            while ($fila=mysqli_fetch_array($datos)){
                echo "<tr>";
                echo "<td>";
                    echo $fila["id_medicion"];
                echo "</td>";
                echo "<td>";
                    echo $fila["fecha"];
                echo "</td>";
                echo "<td>";
                    echo $fila["hora"];
                echo "</td>";
                echo "<td>";
                    echo $fila["dist"];
                echo "</td>";
                echo "<td>";
                    echo $fila["evento"];
                echo "</td>";                
                echo "</tr>";
            } 
            ?>
        </table>
        </div>
    </body>
</html>