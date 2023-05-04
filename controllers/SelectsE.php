<?php

function obtenerEventos(){
    $a = new database();
    $a->select("eventos","*");
    $result = $a->sql;
    return $result;
}

?>