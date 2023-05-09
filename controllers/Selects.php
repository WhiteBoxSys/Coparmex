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
    $a = new database();
    $a->select("categorias", "*");
    $result = $a->sql;
    return $result;
}

function obtenerEventos()
{
    $a = new database();
    $a->select("eventos", "*");
    $result = $a->sql;
    return $result;
}

function obtenerBlogPublicado($id)
{
    $a = new database();
    $a->select("publicaciones", "*", "id='$id'");
    $result = $a->sql;
    return $result->fetch_assoc();
}

function obtenerEvento($id)
{
    $a = new database();
    $a->select("eventos", "*", "id='$id'");
    $result = $a->sql;
    return $result->fetch_assoc();
}

function obtenerCategoriaNombre($id)
{
    $a = new database();
    $a->select("categorias", "*", "id='$id'");
    $result = $a->sql;
    $datos = $result->fetch_assoc();
    return $datos['nombre'];
}
