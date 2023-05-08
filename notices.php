<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'static/head.php' ?>
</head>

<body>
    <?php include './components/Spinner.php' ?>
    <?php include 'static/topbar.php' ?>
    <div class="container-fluid position-relative p-0">
        <?php include 'static/nav.php' ?>
        <?php
        include './components/HeaderOtherPages.php';
        HeaderOtherPages("Noticias");
        ?>
    </div>
    <?php include './components/NoticesGrid.php' ?>
    <?php include 'static/footer.php' ?>
</body>
<script src="assets/js/imagesLoad.js"></script>

</html>