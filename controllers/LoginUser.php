<!-- TODO: Hacer la validación de las credenciales que el usuario ponen en el apartado del administrador para poder entrar al panel -->
<?php
session_start();
include 'DataBaseController.php';
$correo = $_POST['email'];
$contra = sha1($_POST['contra']);

?>