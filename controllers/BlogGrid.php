<!-- TODO: En este apartado tendrás que hacer todas las acciones referentes a el tablero del blog ademas de las propiedades en el panel de administración que el administrador podra eliminar los blogs, sería un CRUD del tablero de blogs -->
<?php
include '../config/DataBase.php';
switch ($caso) {
    case 'agregar':
        include 'DataBaseController.php';
        if (isset($_POST['submit'])) {
            // $name = $_POST['name'];
            $email = $_POST['email'];
            $pwd = $_POST['pwd'];
            // $phone = $_POST['phone'];
            // $subject = $_POST['subject'];
            // $message = $_POST['message'];

            $date = date("Y-m-d h:i:s A");

            $a = new database();
            // $a->insert('data',['name'=>$name,'email'=>$email,'phone'=>$phone,'subject'=>$subject,'message'=>$message,'created'=>$date,'updated'=>$not]);
            $a->insert('admin',['email' => $email, 'contra' => $pwd]);
            if ($a == true) {
                header('location: ../admin/form_test.php');
            }
        }
        break;
    case 'editar':
        break;
    case 'elinminar':
        include 'DataBaseController.php';

        $id = $_POST['id'];

        $a = new database();
        $a->delete('admin',"id='$id'");
        break;
    case 'consultar':
        break;
}
?>