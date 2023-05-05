<div class="col-12">
    <div class="card recent-sales overflow-auto">
        <div class="card-body">
            <h5 class="card-title">Eventos Publicados <span>| Recientes</span></h5>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#noticeModal">
                Agregar Evento
            </button> <br> <br>
            <?php include 'NoticeForm.php'; ?>
            <table class="table  datatable">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "../controllers/SelectsE.php";
                    foreach (obtenerEventos() as $row2) {
                    ?>
                        <tr>
                            <td><?php echo $row2['id']  ?></td>
                            <td><?php echo $row2['titulo']  ?></td>
                            <td><?php echo $row2['descripcion']  ?></td>
                            <td><?php echo $row2['id_categoria']  ?></td>
                            <td>
                                <button type="button" class="btn btn-success"><i class="bi bi-pencil"></i></button>
                                <button type="button" onclick="eliminarEvento(<?php echo $row2['id']  ?>)" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="js/Events.js"></script>