<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="row g-5">
                    <?php
                    include "controllers/Selects.php";
                    foreach (obtenerEventos() as $row) {
                    ?>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" data-src="assets/noticias/<?php echo $row['titulo'] . '/' . $row['imagen_evento']  ?>" alt="Evento">
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small><i class="far fa-calendar-alt text-primary me-2">Categoría: </i><?php echo obtenerCategoriaNombre($row['id_categoria'])  ?></small>
                                        <small><i class="far fa-calendar-alt text-primary me-2">Día del evento: </i><?php echo $row['creado']  ?></small>
                                    </div>
                                    <h4 class="mb-3"><?php echo $row['titulo']  ?></h4>
                                    <p><?php echo $row['descripcion']  ?></p>
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
                        <h3 class="mb-0">Categorias</h3>
                    </div>
                    <div class="link-animated d-flex flex-column justify-content-start">
                        <?php foreach (obtenerCategorias() as $row) { ?>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i><?php echo $row['nombre'] ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>