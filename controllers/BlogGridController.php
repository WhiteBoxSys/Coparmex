<?php
include 'DataBaseController.php';
$a = new database();
switch ($_POST['caso']) {
    case 'agregar':
        $a->insert('publicaciones', ['autor' => $_POST['autor'], 'titulo' => $_POST['titulo'], 'descripcion' => $_POST['descripcion'], 'id_categoria' => $_POST['categoria'], 'texto_blog' => $_POST['texto_blog']]);
        $result = $a->sql;
        echo 1;
        break;
    case 'editar':
        break;
    case 'eliminar':
        $id = $_POST['id'];
        $a->delete('publicaciones', "id='$id'");
        $result = $a->sql;
        echo 1;
        break;
}
