<?php
include "DataBaseController.php";

function obtenerBlogsPublicados()
{
    $a = new database();
    $a->select("publicaciones", "*");
    $result = $a->sql;
    return $result;
}

function obtenerCategorias()
{
    $b = new database();
    $b->select("categorias", "*");
    $result = $b->sql;
    return $result;
}

function obtenerEventos()
{
    $a = new database();
    $a->select("eventos", "*");
    $result = $a->sql;
    return $result;
}
