<?php
session_start();
include 'DataBaseController.php';
$correo = $_POST['email'];
$contra = sha1($_POST['contra']);
$a = new database();
if ($a->getUser($correo, $contra)) {
    $_SESSION['usuario'] = $correo;
    echo 1;
} else {
    echo 2;
}
