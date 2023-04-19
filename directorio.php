<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './static/head.php'; ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
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
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
    <script src="assets/js/tablaDirectorios.js"></script>
</body>
<script src="assets/js/imagesLoad.js"></script>
</html>