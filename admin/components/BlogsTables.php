<div class="col-12">
    <div class="card recent-sales overflow-auto">
        <div class="card-body">
            <h5 class="card-title">Tabla <span>| Blogs Publicados</span></h5>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
                Agregar Blog
            </button>
            <br>
            <hr>
            <?php include 'components/AddBlog.php' ?>
            <table class="table table-borderless datatable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><a href="#">#1</a></th>
                        <td>Brandon Jacob</td>
                        <td>Fiscal</td>
                        <td><a href="#" class="text-primary">At praesentium minu</a></td>
                        <td><span class="badge bg-success">Disponible</span></td>
                        <td>
                            <button type="button" class="btn btn-success"><i class="bi bi-pencil-fill
"></i></button>
                            <button type="button" class="btn btn-danger"><i class="bi bi-trash" onclick="eliminar_blog(1)"></i></button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="./scripts/Blogs.js"></script>