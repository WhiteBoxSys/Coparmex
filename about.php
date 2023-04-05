<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './static/head.php'; ?>
</head>

<body>
    <?php include './components/Spinner.php' ?>
    <?php include './static/topbar.php'; ?>
    <div class="container-fluid position-relative p-0">
        <?php include './static/nav.php'; ?>
        <?php
        include './components/HeaderOtherPages.php';
        HeaderOtherPages("Conócenos");
        ?>
    </div>
    <?php include './components/NuestraHistoria.php' ?>
    <?php include './components/NuestrasFunciones.php' ?>
    <?php include './components/Presidentes.php' ?>
    <?php include './components/NuestroEquipo.php' ?>
    <?php include './static/footer.php'; ?>
</body>

</html>