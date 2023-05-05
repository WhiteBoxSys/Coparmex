<?php
function  detallesBlog($id)
{
    include 'controllers/DataBaseController.php';
    $a = new database();
    $a->select("publicaciones", "*", "id='$id'");
    $result = $a->sql;
    $row = mysqli_fetch_assoc($result);
    echo '
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="mb-5">
                    <img class="img-fluid w-100 rounded mb-5" src="https://github.com/JuanPablo-Hack.png" alt="ImgBlog">
                    <h1 class="mb-4">' . $row['titulo'] . '</h1>
                    <h3 class="mb-4">Autor: ' . $row['autor'] . '</h3>
                    <p>' . $row['texto_blog'] . '</p>
                </div>
            </div>
        </div>
    </div>
</div>    
    ';
}
