<?php
$servername="localhost";
$username="root";
$password="";
$database="u335407339_coparmex";
$conexion = mysqli_connect($servername, $username, $password, $database);
if (!$conexion) {
    die("Fallo en la conexión: " . mysqli_connect_error());
}else{
    echo "Bse de datos conectada con éxito.";
}
mysqli_close($conexion);
?>

