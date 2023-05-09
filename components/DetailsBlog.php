<?php
function  detallesBlog($id)
{
    include 'controllers/Selects.php';
    $row = obtenerBlogPublicado($id);
    echo '
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="mb-5">
                        <img class="img-fluid w-100 rounded mb-5" data-src="assets/blog/' . $row['titulo'] . '/' . $row['foto'] . '" alt="' . $row['titulo'] . '">
                        <h1 class="mb-4">' . $row['titulo'] . '</h1>
                        <div style="display:flex; margin-top:30px; flexdirection:row; justify-content:space-between">
                            <h4 class="mb-4">Autor:  <strong>' . $row['autor'] . '</strong></h4>
                            <h4 class="mb-4">Categoria:  <strong>' . obtenerCategoriaNombre($row['id_categoria']) . '</strong></h4>
                            <h4 class="mb-4">Fecha: <strong>' . $row['creado'] . '</strong> </h4>
                        </div>
                        <h2 class="mb-4">' . $row['descripcion'] . '</h2>
                        <p>' . $row['texto_blog'] . '</p>  
                    </div>
                </div>
            </div>
        </div>
    </div>    
    ';
}
