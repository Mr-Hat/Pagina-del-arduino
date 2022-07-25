<?php
include("conexion_general.php");
$consulta = "SELECT * FROM temperaturas";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Temperatura</title>
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="https://media.discordapp.net/attachments/959570367675002905/959932714801328258/unknown.png">
    <a href=""></a>
</head>
<style>
table {
    

}
</style>
    <body>
        <div id="temperaturas">
        <br><h1>Kit temperatura</h1>
        <br><h2>Temperatura</h2>
        <table>
            <tr>
                <center><th>ID medición</th></center>
                <center><th>Fecha</th></center>
                <center><th>Hora</th></center>
                <center><th>Temperatura</th></center>
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
                    echo $fila["temperatura"];
                echo "</td>";
                echo "</tr>";
            } 
            ?>
        </table>
        </div>
    </body>
</html>