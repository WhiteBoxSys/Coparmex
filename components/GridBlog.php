<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="row g-5">
                    <?php
                    include "controllers/Selects.php";
                    foreach (obtenerBlogsPublicados() as $row) {
                    ?>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" data-src="assets/blog/<?php echo $row['titulo'] . '/' . $row['foto']  ?>" alt="BlogGrids">
                                    <span class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""><?php echo obtenerCategoriaNombre($row['id_categoria'])  ?></span>
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-primary me-2"></i><?php echo $row['autor']  ?></small>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i><?php echo $row['creado']  ?></small>
                                    </div>
                                    <h4 class="mb-3"><?php echo $row['titulo']  ?></h4>
                                    <p><?php echo $row['descripcion']  ?></p>
                                    <a class="text-uppercase" href="./detail.php?id_blog=<?php echo $row['id'] ?>">Ver más <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- TODO: en este apartado debes de hacer que el input del buscador a hacer un evento onchange te lance los blogs relacionados dependiendo del lo que vaya escribiendo, este lo vas a validar con el campo de resumen que estará dentro de la base de datos utilizando la transaccion like en mysql para ver parecidos en la tabla  -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="Buscar...">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
                <!-- TODO: al hacer click a cualquier de las categorías solo se tengan que mostrar las categorias relacionadas con la que se le dio click -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="mb-0">Categories</h3>
                    </div>
                    <div class="link-animated d-flex flex-column justify-content-start">
                        <?php foreach (obtenerCategorias() as $row) { ?>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i><?php echo $row['nombre'] ?></a>
                        <?php } ?>
                    </div>
                </div>
                <!-- TODO:  aqui tendrías que mostrar solo los blogs mas recientes por lo que en la cosulta tendrás quie validar el campo de fecha ponerlas de forma ascendente, y solo tendrías que mostrar los primeros 5 resultados, de manera que con un ciclo while o un foreach puedas recorrer todos los resultados que te arroja la base de datos -->
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="mb-0">Post Recientes</h3>
                    </div>
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <?php foreach (obtenerBlogsPublicados() as $row) { ?>
                            <!-- TODO: Aqui vas a mostrar una imagen que estará en la base de datos la cual la pondras en la variable del atributo src en este caso, en vez de estar "assets/img/blog-1.jpg", estaría algo tipo $mostrar_datos['ruta_imagen'] usando las propiedades de php con el objeto de mysql -->
                            <img class="img-fluid" data-src="assets/blog/<?php echo $row['titulo'] . '/' . $row['foto']  ?>" style="width: 100px; height: 100px; object-fit: cover;" alt="Recents Blog">
                            <!-- TODO: Aqui vas a poner el titulo dentro de la etiqueta a con la variable de la categoria del blog en su caso sería algo tipo así $mostrar_datos['id_categoria'], sería igual para las demás etiquetas que siguen el titulo, el resumen, la fecha y el autor -->
                            <a href="./detail.php?id_blog=<?php echo $row['id'] ?>" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0"><?php echo $row['titulo']  ?>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>