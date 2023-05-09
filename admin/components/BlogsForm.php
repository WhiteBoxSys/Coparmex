<div class="modal fade" id="basicModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar Publicación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success alert-dismissible fade show" role="alert" id="successmessage" style="display: none;">
                    Felicidades has agreagado tu primer blog con éxito!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <form class="row g-3" id="AltaDeBlogs" enctype="multipart/form-data">
                    <div class="col-md-12">
                        <label for="inputName5" class="form-label">Titulo</label>
                        <input type="text" class="form-control" id="inputName5" name="titulo" required>
                    </div>
                    <div class="col-md-4">
                        <label for="inputEmail5" class="form-label">Autor</label>
                        <input type="text" class="form-control" name="autor" required>
                    </div>
                    <div class="col-md-4">
                        <label for="inputPassword5" class="form-label">Descripción</label>
                        <input type="text" class="form-control" name="descripcion" required>
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Categoria</label>
                        <select id="inputState" class="form-select" required name="categoria">
                            <option selected>Selecciona una opción</option>
                            <?php foreach (obtenerCategorias() as $row) {  ?>
                                <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Subir Imagen</label>
                        <input type="file" accept="image/png, .jpeg, .jpg, image/gif" name="image" multiple />
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Texto</label>
                        <textarea class="form-control" rows="9" name="texto_blog"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>