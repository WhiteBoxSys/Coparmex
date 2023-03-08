<?php
function conectDB(){
    $servername="localhost";
    $username="root";
    $password="";
    $database="u335407339_coparmex";
    $conexion = mysqli_connect($servername, $username, $password, $database);
    if (!$conexion) {
        return false;
    }else{
        return $conexion;
    }
}

?>

