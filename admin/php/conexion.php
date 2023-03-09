<?php
function conectDB(){
    $conexion = mysqli_connect('localhost', 'root', '', 'u335407339_coparmex');
    if (validar_conexion($conexion)) {
        return $conexion;
    }else{
        return false;
    }
}
function validar_conexion($conexion){
    if($conexion){
        return true;
    }else{
        return false;
    }
}

?>

