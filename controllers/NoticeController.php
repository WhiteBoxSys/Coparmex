<?php
include 'DataBaseController.php';
$a = new database();
$textoImg="sdsdsd";
switch ($_POST['caso']) {
    case 'agregar':
        $a->insert('eventos', [ 'titulo' => $_POST['titulo'], 'descripcion' => $_POST['descripcion'],'texto' => $_POST['texto'], 'id_categoria' => $_POST['categoria'],'imagen_evento' => $textoImg]);
        $result = $a->sql;
        echo 1;
        break;
    case 'editar':
        break;
    case 'eliminar':
        $id = $_POST['id'];
        $a->delete('eventos', "id='$id'");
        $result = $a->sql;
        echo 1;
        break;
}