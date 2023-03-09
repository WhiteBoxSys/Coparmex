<?php
session_start();
include 'conexion.php';
$conexion = conectDB();
// if(!empty($_POST["login"])){
    
// }
if(!empty($_POST["username"]) && !empty($_POST["password"])){
    $correo = $_POST['username'];
    $pwd = $_POST['password'];
    $sql = $conexion->query("SELECT * FROM admin WHERE email='$correo' AND contra='$pwd'");
    if($datos = $sql->fetch_object()){
        $_SESSION['id'] = $datos->id;
        $_SESSION['email'] = $datos->email;
        header("Location: ../dashboard.php");
    }else{
        echo "<div class='alert alert-danger'>Acceso denegado</div>";
    }
}
// include 'conexion.php';
// // TODO: tuve que agregar una sesión en tabla admin, porque no hay ninguna tabla usuarios,
// // lo hice para poder hacer las pruebas del inicio de sesión, al rato hago una tabla usuarios
// // y hago el session destroy para el logout.
// $correo = $_POST['username'];
// $password = $_POST['password'];
// // $password = sha1($_POST['password']);
// $conexion = conectDB();

// if ($conexion ->connect_error) {
//     die("Conexion Fallida: " . $conexion ->connect_error);
// }else{
//    $sql="SELECT * FROM admin WHERE email='$correo' AND contra='$password'";
//    $resultado = $conexion->query($sql);
//     if($resultado){
//             // $row = mysqli_fetch_assoc($resultado);
//             // $hash = $password;
//             if($password == $password){
//                 //$_SESSION['email'] = $correo;	
//                 //Redirecciono al usuario a la página principal del sitio.
//                 $_SESSION['email'] = $correo;
//                 // $_SESSION['rol_name'] = ;
//                 // header("HTTP/1.1 302 Moved Temporarily"); 
//                 header("Location: ../dashboard.php");
//             }else{
//                 header("Refresh:0; url=../index.php");
//             }
//     }
// }
?>