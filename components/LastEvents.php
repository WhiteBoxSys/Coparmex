<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Próximos eventos</h5>
            <h1 class="mb-0">Ven y conoce nuestros próximos eventos</h1>
        </div>
        <div class="row g-5">
            <?php
            include "controllers/Selects.php";
            foreach (obtenerEventos() as $row) {
            ?>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" data-src="assets/noticias/<?php echo $row['titulo'] . '/' . $row['imagen_evento']  ?>" alt="Evento">
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small><i class="far fa-calendar-alt text-primary me-2">Categoría: </i><?php echo obtenerCategoriaNombre($row['id_categoria'])  ?></small>
                                <small><i class="far fa-calendar-alt text-primary me-2">Día del evento: </i><?php echo $row['fecha_evento']  ?></small>
                            </div>
                            <h4 class="mb-3"><?php echo $row['titulo'] ?></h4>
                            <p><?php echo $row['texto']  ?></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>