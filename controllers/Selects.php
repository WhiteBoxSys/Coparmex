<?php
function obtenerBlogsPublicados()
{
    include "config/ConnectionDB.php";
    $queryConsulta = $conexionDB->query("SELECT * FROM publicaciones");
    return $queryConsulta;
}
