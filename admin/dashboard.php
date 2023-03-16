<!DOCTYPE html>
<html lang="en">

<head>
  <?php 
  include './static/head.php';
  session_start();
  ?>
</head>

<body>
  <?php include './static/header.php' ?>
  <?php include './static/navbar.php' ?>
  <main id="main" class="main">
    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <?php include 'components/CardsCounter.php' ?>
            <?php include 'components/BlogsTables.php' ?>
            <?php include 'components/EventsTable.php' ?>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include './static/footer.php' ?>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>