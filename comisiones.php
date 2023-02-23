<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './statics/head.php'; ?>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <?php include './statics/header.php'; ?>
    <div class="container-fluid position-relative p-0">
        <?php include './statics/nav.php'; ?>
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Comisiones</h1>
                    <a href="" class="h5 text-white">Inicio</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Comisiones</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Comisiones</h5>
                        <h1 class="mb-0">Que es una comisión?</h1>
                    </div>
                    <p class="mb-4">Una comisión de trabajo es un órgano de estudio y consulta especializada que integra el talento de socios voluntarios, funcionarios y en su caso expertos externos para formulación de los posicionamientos de COPARMEX.</p>
                    <p class="mb-4">
                        Las comisiones son el espacio natural para que los socios de los centros empresariales participen de manera libre y activa en el análisis, reflexión, propuesta y acción en torno a determinados temas. </p>
                    <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Afíaliate</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Comisiones</h5>
                <h1 class="mb-0">Conoce nuestras comisiones y sus funciones</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-1.jpg" alt="">
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Atención a Socios</h4>
                            <p>Atención a socios, visitas, seguimiento a los intereses y necesidad de los agremiados.</p> <br> <br> <br> <br>
                        </div>
                        <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i><strong>Presidente:</strong></small>
                                <small>Lic. Jonathan Torres De La Mora</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-2.jpg" alt="">
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Comercio</h4>
                            <p>Promover el mercado interno y la participación de los empresarios COPARMEX en las actividades que puedan hacer crecer sus empresas, así como la atracción de nuevas empresas para fortalecer nuestro mercado interno.</p>
                        </div>
                        <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i><strong>Presidente:</strong></small>
                                <small>Lic. Oscar Hernández Méndez </small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-3.jpg" alt="">
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Cultura</h4>
                            <p>Promover la cultura en el municipio de Manzanillo, Colima a través de actividades culturales que sean incluyentes y equitativas para un desarrollo sustentable de las comunidades.</p> <br>
                        </div>
                        <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i><strong>Presidente:</strong></small>
                                <small>Lic. Magdalena Montiel Solís</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-1.jpg" alt="">
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Desarrollo Empresarial</h4>
                            <p>Promover entre los socios las venas prácticas empresariales, el emprendeurismo y la conexión social y comercial entre los mismos que les ayude a generar relaciones exitosas y duraderas.</p> <br>  <br>
                        </div>
                        <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i><strong>Presidente:</strong></small>
                                <small> Ing. Miguel Ángel Castro Palomino</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-2.jpg" alt="">
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Educación y Capacitación</h4>
                            <p>Formar integralmente el talento humano del emprendedor y empresario, creando un enfoque de competitividad y responsabilidad social.</p> <br> <br> <br>
                        </div>
                        <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i><strong>Presidente:</strong></small>
                                <small>M.E. Ahuitzotl Zárate Flores </small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-3.jpg" alt="">
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Fiscal</h4>
                            <p>Promover y difundir la cultura fiscal, así como asesorar en materia tributaria a todo el sector empresarial, con la finalidad de mantener sus negocios dentro de la legalidad y con ello garantizar la tranquilidad y seguridad tributaria de las y los empresarios manzanillenses.</p> <br>
                        </div>
                        <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i><strong>Presidente:</strong></small>
                                <small>C.P. Rafael García Trejo</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-1.jpg" alt="">
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Grandes Empresas</h4>
                            <p>Definir e implementar un plan estratégico y un programa de trabajo que permita incrementar la oferta de valor, los servicios y los beneficios que actualmente genera el CEM para las grandes empresas, promoviendo la incorporación de nuevos socios y desarrollando esquemas de cooperación.</p> 
                        </div>
                        <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i><strong>Presidente:</strong></small>
                                <small>Lic. Carlos Olivar Pérez</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-2.jpg" alt="">
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Laboral</h4>
                            <p>Asesoría a los socios en materia laboral y dar a conocer de manera constante temas relevantes.</p> <br><br><br><br>
                        </div>
                        <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i><strong>Presidente:</strong></small>
                                <small>Lic. Uriel Moreno Flores </small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-3.jpg" alt="">
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Responsabilidad Social</h4>
                            <p>Tener un impacto positivo y favorable para la comunidad.</p> <br> <br> <br> <br> <br> 
                        </div>
                        <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i><strong>Presidente:</strong></small>
                                <small>Arq. Oscar Nevárez Vergara</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-1.jpg" alt="">
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Salud</h4>
                            <p>Se consolida la nueva Comisión de Salud, con el objetivo de Coordinación de la estrategia del Plan de salud Coparmex para hacer frente a la fase III del Covid-19.</p> <br> <br> <br>
                        </div>
                        <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i><strong>Presidente:</strong></small>
                                <small>Lic. Mariana Reyes</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-2.jpg" alt="">
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Turismo</h4>
                            <p>Representaren las diferentes asociaciones promoviendo el destino y proyectos turísticos en el Estado, así como la organización de eventos y actividades en este rubro.</p> <br> <br> <br>
                        </div>
                        <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i><strong>Presidente:</strong></small>
                                <small>Lic. Juan Carlo Rincones </small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-3.jpg" alt="">
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Vivienda</h4>
                            <p>Tener presencia en el Infonavit, toda vez que es un referente de créditos hipotecarios entre nuestros colaboradores. Defender al Infonavit en su autonomía y tripartismo, ya que sus recursos son de los trabajadores formales, patrones..</p> <br>
                        </div>
                        <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i><strong>Presidente:</strong></small>
                                <small>Lic. Magdalena Montiel Solís</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-1.jpg" alt="">
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">Puerto</h4>
                            <p>Coordinar, facilitar y establecer líneas de acción enfocadas al desarrollo integral y sustentable entre Puerto- Ciudad- Empresa que nos permitan un creciente desarrollo económico y social en la región.</p> <br> <br> 
                        </div>
                        <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i><strong>Presidente:</strong></small>
                                <small>Mtro. Oscar Benavides Carrillo</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include './statics/footer.php'; ?>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>