<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './statics/head.php'; ?>
</head>

<body>
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <?php include './statics/topbar.php'; ?>
    <div class="container-fluid position-relative p-0">
        <?php include './statics/nav.php'; ?>
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Contacto</h1>
                    <a href="" class="h5 text-white">Inicio</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Contacto</a>
                </div>
            </div>
        </div>
    </div>
    <?php include './components/ContactForm.php' ?>
    <?php include './statics/footer.php'; ?>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>