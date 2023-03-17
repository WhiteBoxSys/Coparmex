<!-- TODO: Hacer la validación de las credenciales que el usuario ponen en el apartado del administrador para poder entrar al panel -->
<?php
session_start();
include 'DataBaseController.php';
if(isset($_POST['submit'])){
    $email = $_POST['username'];
    $pwd = $_POST['password'];
    $r = new database();
    $r->select("admin","*");
    $result = $r->sql;
    $row = mysqli_fetch_assoc($result);
    if($email == $row['email'] && $pwd == $row['contra']){
        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        header("Location: ../admin/dashboard.php");
    }else{
        header("Location: ../admin/index.php");
    }
}

?>