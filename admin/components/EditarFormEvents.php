<div class="modal fade" id="EditarEvent<?php echo $row2['id'] ?>" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Noticia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="../controllers/NoticeController.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="caso" value="editar">
                    <input type="hidden" name="id" value="<?php echo $row2['id'] ?>">
                    <div class="col-md-12" style="margin-top:20px">
                        <label for="inputName5" class="form-label">Titulo</label>
                        <input type="text" class="form-control" id="inputName5" name="titulo" value="<?php echo $row2['titulo'] ?>">
                    </div>
                    <div style="display:flex; width:100%; flex-direction:row; justify-content:space-between; margin-bottom:20px; margin-top:20px;">
                        <div style="max-width: 100%;padding-right: calc(var(--bs-gutter-x) * .5); padding-left: calc(var(--bs-gutter-x) * .5);margin-top: var(--bs-gutter-y);">
                            <label for="inputPassword5" class="form-label">Descripción</label>
                            <input type="text" class="form-control" name="descripcion" value="<?php echo $row2['descripcion'] ?>">
                        </div>
                        <div style="max-width: 100%;padding-right: calc(var(--bs-gutter-x) * .5); padding-left: calc(var(--bs-gutter-x) * .5);margin-top: var(--bs-gutter-y);">
                            <label for="inputState" class="form-label">Categoria</label>
                            <select id="inputState" class="form-select" name="categoria">
                                <option selected>Selecciona una opción</option>
                                <?php foreach (obtenerCategorias() as $row) {  ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Subir Imagen</label>
                        <input type="file" accept="image/png, .jpeg, .jpg, image/gif" name="image" multiple />
                    </div>
                    <br>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Texto</label>
                        <textarea class="form-control" rows="9" name="texto"><?php echo $row2['texto'] ?></textarea>
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