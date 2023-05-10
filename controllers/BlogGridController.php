<?php
include 'DataBaseController.php';
$a = new database();
switch ($_POST['caso']) {
    case 'agregar':
        $a->insert('publicaciones', ['autor' => $_POST['autor'], 'titulo' => $_POST['titulo'], 'foto' => $_FILES['image']['name'], 'descripcion' => $_POST['descripcion'], 'id_categoria' => $_POST['categoria'], 'texto_blog' => $_POST['texto_blog']]);
        $result = $a->sql;
        agregar_imagen($_POST['titulo'], $_FILES['image']['name']);
        break;
    case 'editar':
        $id = $_POST['id'];
        $a->update("publicaciones", ['autor' => $_POST['autor'], 'titulo' => $_POST['titulo'], 'foto' => $_FILES['image']['name'], 'descripcion' => $_POST['descripcion'], 'id_categoria' => $_POST['categoria'], 'texto_blog' => $_POST['texto_blog']], "id='$id'");
        $result = $a->sql;
        agregar_imagen($_POST['titulo'], $_FILES['image']['name']);
        header("Location: ../admin/index.php");
        break;
    case 'eliminar':
        $id = $_POST['id'];
        $a->delete('publicaciones', "id='$id'");
        $result = $a->sql;
        echo 1;
        break;
}

function agregar_imagen($titulo, $imagen)
{
    $ruta_principal = '../assets/blog/';
    $ruta = $ruta_principal . $titulo . "/";
    if (!file_exists($ruta_principal)) {
        mkdir($ruta, 0777, true);
    }
    if (!file_exists($ruta)) {
        mkdir($ruta, 0777, true);
    }
    move_uploaded_file($_FILES['image']['tmp_name'], $ruta . $imagen);
}
