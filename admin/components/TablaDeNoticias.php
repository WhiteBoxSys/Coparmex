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
                        <th scope="col">#</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><a href="#">#2457</a></th>
                        <td>Brandon Jacob</td>
                        <td><a href="#" class="text-primary">At praesentium minu</a></td>
                        <td>$64</td>
                        <td>
                            <button type="button" class="btn btn-success"><i class="bi bi-pencil"></i></button>
                            <button type="button" onclick="eliminarEvento()" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="js/Events.js"></script>