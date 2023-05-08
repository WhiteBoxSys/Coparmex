<?php
function  detallesBlog($id)
{
    include 'controllers/DataBaseController.php';
    $a = new database();
    $a->select("publicaciones", "*", "id='$id'");
    $result = $a->sql;
    $row = mysqli_fetch_assoc($result);
    $categoria="";
    if ($row["id_categoria"]== 1){
        $categoria = "Fiscal";
    }else{
        $categoria = "Laboral";
    }
    $fecha = date("d-m-y", strtotime($row["creado"]));
    echo '
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="mb-5">
                    <div style="display:flex; text-aling: center;">
                        <h1 id="TituloBlog" style="text-aling:center; margin-bottom:20px">' . $row['titulo'] . '</h1>
                    </div>
                    <div style="display:flex; margin-top:20px; flexdirection:row; justify-content:space-around">
                        <h3 class="mb-4">Autor: ' . $row['autor'] . '</h3>
                        <h3 class="mb-4">Categoria: ' . $categoria. '</h3>
                        <h3 class="mb-4">Fecha: ' . $fecha. '</h3>
                    </div>
                    <p>' . $row['texto_blog'] . '</p>
                </div>
            </div>
        </div>
    </div>
</div>    
    ';
}
