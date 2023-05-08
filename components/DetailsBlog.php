<?php
function  detallesBlog($id)
{
    include 'controllers/DataBaseController.php';
    $a = new database();
    $a->select("publicaciones", "*", "id='$id'");
    $result = $a->sql;
    $row = mysqli_fetch_assoc($result);
    $categoria = "";
    if ($row["id_categoria"] == 1) {
        $categoria = "Fiscal";
    } else {
        $categoria = "Laboral";
    }
    $fecha = date("d-m-y", strtotime($row["creado"]));
    echo '
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="mb-5">
                        <img class="img-fluid w-100 rounded mb-5" data-src="assets/img/blog-1.jpg" alt="' . $row['titulo'] . '">
                        <h1 class="mb-4">' . $row['titulo'] . '</h1>
                        <div style="display:flex; margin-top:30px; flexdirection:row; justify-content:space-between">
                            <h4 class="mb-4">Autor:  <strong>' . $row['autor'] . '</strong></h4>
                            <h4 class="mb-4">Categoria:  <strong>' . $categoria . '</strong></h4>
                            <h4 class="mb-4">Fecha: <strong>' . $fecha . '</strong> </h4>
                        </div>
                        <h2 class="mb-4">' . $row['descripcion'] . '</h1>
                        <p>' . $row['texto_blog'] . '</p>  
                    </div>
                </div>
            </div>
        </div>
    </div>    
    ';
}
