<?php
session_start();
if (!isset($_SESSION['usuario'])){
  echo'
  <script>
    alert("Debes iniciar sesion para continuar")
    window.location = "login.php" 
  </script>
  ';
  session_destroy();
  die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'static/head.php'; ?>
</head>

<body>
  <?php include 'static/header.php'; ?>
  <?php include 'static/nav.php'; ?>
  <main id="main" class="main">
    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <?php include 'components/CardsStats.php'; ?>
            <?php include 'components/TablaDeBlogs.php'; ?>
            <?php include 'components/TablaDeNoticias.php'; ?>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include 'static/footer.php'; ?>
</body>

</html>