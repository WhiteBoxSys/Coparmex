<div class="modal fade" id="basicModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar Publicación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3">
                    <div class="col-md-12">
                        <label for="inputName5" class="form-label">Titulo</label>
                        <input type="text" class="form-control" id="inputName5">
                    </div>
                    <div class="col-md-4">
                        <label for="inputEmail5" class="form-label">Autor</label>
                        <input type="text" class="form-control" id="inputEmail5">
                    </div>
                    <div class="col-md-4">
                        <label for="inputPassword5" class="form-label">Descripción</label>
                        <input type="text" class="form-control" id="inputPassword5">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Categoria</label>
                        <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Subir Imagen</label>
                        <input type="file" class="btn btn-primary" accept="image/png, .jpeg, .jpg, image/gif" />
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Texto</label>
                        <textarea class="form-control" rows="9"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>