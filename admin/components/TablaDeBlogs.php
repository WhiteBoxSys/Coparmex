<div class="col-12">
    <div class="card recent-sales overflow-auto">
        <div class="card-body">
            <h5 class="card-title">Blogs Publicados <span>| Recientes</span></h5>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                Agregar Publicación
            </button>
            <br> <br>
            <?php include 'BlogsForm.php' ?>
            <table class="table  datatable">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach (obtenerBlogsPublicados() as $row) {
                    ?>
                        <tr>
                            <th scope="row"><a href="#"><?php echo $row['id']  ?></a></th>
                            <td><?php echo $row['autor']  ?></td>
                            <td><a href="../detail.php?id_blog=<?php echo $row['id'] ?>" class="text-primary"><?php echo $row['titulo']  ?></a></td>
                            <td><?php echo obtenerCategoriaNombre($row['id_categoria'])  ?></td>
                            <td>
                                <button type="button" class="btn btn-success" title="Editar" data-bs-toggle="modal" data-bs-target="#EditarBlog<?php echo $row['id'] ?>"><i class="bi bi-pencil"></i></button>
                                <button type="button" onclick="eliminarBlog(<?php echo $row['id']  ?>)" class="btn btn-danger" title="Eliminar"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                        <?php include 'EditarFormBlogs.php' ?>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="js/Blogs.js"></script>