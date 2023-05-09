<?php
include 'DataBaseController.php';
$a = new database();
switch ($_POST['caso']) {
    case 'agregar':
        $a->insert('eventos', ['titulo' => $_POST['titulo'], 'descripcion' => $_POST['descripcion'], 'texto' => $_POST['texto'], 'id_categoria' => $_POST['categoria'], 'imagen_evento' => $_FILES['image']['name']]);
        $result = $a->sql;
        agregar_imagen($_POST['titulo'], $_FILES['image']['name']);
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
function agregar_imagen($titulo, $imagen)
{
    $ruta_principal = '../assets/noticias/';
    $ruta = $ruta_principal . $titulo . "/";
    if (!file_exists($ruta_principal)) {
        mkdir($ruta, 0777, true);
    }
    if (!file_exists($ruta)) {
        mkdir($ruta, 0777, true);
    }
    move_uploaded_file($_FILES['image']['tmp_name'], $ruta . $imagen);
}
