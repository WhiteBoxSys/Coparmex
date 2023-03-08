<div class="col-12">
    <div class="card recent-sales overflow-auto">
        <div class="card-body">
            <h5 class="card-title">Eventos <span>| Recientes</span></h5>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal_Event">
                Agregar Evento
            </button>
            <br>
            <hr>
            <?php include 'components/AddEvent.php' ?>
            <table class="table table-borderless datatable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre del Evento</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><a href="#">#2457</a></th>
                        <td>Brandon Jacob</td>
                        <td><a href="#" class="text-primary">At praesentium minu</a></td>
                        <td>$64</td>
                        <td><span class="badge bg-success">Approved</span></td>
                        <td>
                            <button type="button" class="btn btn-success"><i class="bi bi-pencil-fill
"></i></button>
                            <button type="button" class="btn btn-danger" onclick="eliminar_evento(1)"><i class="bi bi-trash"></i></button>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="./scripts/Events.js"></script>