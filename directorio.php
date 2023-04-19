<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './static/head.php'; ?>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <?php include './components/Spinner.php' ?>
    <?php include './static/topbar.php'; ?>
    <div class="container-fluid position-relative p-0">
        <?php include './static/nav.php'; ?>
        <?php
        include './components/HeaderOtherPages.php';
        HeaderOtherPages("Directorio");
        ?>
    </div>
    <?php include './components/DirectoryPartners.php' ?>
    <?php include './static/footer.php'; ?>
</body>
<script src="assets/js/imagesLoad.js"></script>
</html>