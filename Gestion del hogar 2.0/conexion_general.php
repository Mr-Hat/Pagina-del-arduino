<?php
$servername = "localhost";
$username = "root";
$password = "g1234"; //cabiar dependiendo del pc 
$dbname = "Gestion";
    //crear la coexion
$conn = mysqli_connect($servername, $username, $password, $dbname);
    //verifica conexion
if (!$conn){
    die("fallo la conección: ".mysqli_connect());
}
?>