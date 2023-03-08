<?php
session_start();
include 'conexion.php';
// TODO: tuve que agregar una sesión en tabla admin, porque no hay ninguna tabla usuarios,
// lo hice para poder hacer las pruebas del inicio de sesión, al rato hago una tabla usuarios
// y hago el session destroy para el logout.
$user = $_POST['username'];
$password = $_POST['password'];
// $password = sha1($_POST['yourPassword']);
$conexion = conectDB();

if ($conexion ->connect_error) {
    die("Conexion Fallida: " . $conexion ->connect_error);
}else{
   $sql="SELECT * FROM admin WHERE email='$correo'";
   $resultado = $conexion->query($sql);
    if($resultado){
            $row = mysqli_fetch_assoc($resultado);
            // $hash = $password;
            if($password){
                //$_SESSION['email'] = $correo;	
                //Redirecciono al usuario a la página principal del sitio.
                $_SESSION['username'] = $row['id'];
                $_SESSION['email'] = $row['correo'];
                // $_SESSION['rol_name'] = ;
                // header("HTTP/1.1 302 Moved Temporarily"); 
                header("Location: ../dashboard.php");
            }else{
                
                header("Refresh:0; url=../index.php");
            }
    }
}
?>