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
        HeaderOtherPages("Blog");
        ?>
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
    <?php include './components/GridBlog.php' ?>
    <?php include 'static/footer.php' ?>
</body>

</html>