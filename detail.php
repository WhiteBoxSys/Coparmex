<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'static/head.php' ?>
</head>

<body>

    <?php include 'static/topbar.php' ?>
    <div class="container-fluid position-relative p-0">
        <?php include 'static/nav.php' ?>
        <?php
        include './components/HeaderOtherPages.php';
        HeaderOtherPages("Detalles de Blog");
        ?>
    </div>
    <?php
    include './components/DetailsBlog.php';
    detallesBlog($_GET['id_blog']);
    ?>
    <?php include 'static/footer.php' ?>
</body>
<script src="assets/js/imagesLoad.js"></script>

</html>