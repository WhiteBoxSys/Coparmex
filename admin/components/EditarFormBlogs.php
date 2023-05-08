<div class="modal fade" id="EditarBlog<?php echo $row['id'] ?>" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Publicación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success alert-dismissible fade show" role="alert" id="successmessage" style="display: none;">
                    Felicidades has agreagado tu primer blog con éxito!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <form class="row g-3" id="EdicionDeBlogs">
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    <div class="col-md-12" style="margin-top:20px">
                        <label for="inputName5" class="form-label">Titulo</label>
                        <input type="text" class="form-control" id="inputName5" name="titulo" value="<?php echo $row['titulo'] ?>" required>
                    </div>
                    <div style="display:flex; width:100%; flex-direction:row; justify-content:space-between; margin-bottom:20px; margin-top:20px;">
                        <div style="max-width: 100%;padding-right: calc(var(--bs-gutter-x) * .5); padding-left: calc(var(--bs-gutter-x) * .5);margin-top: var(--bs-gutter-y);">
                            <label for="inputEmail5" class="form-label">Autor</label>
                            <input type="text" class="form-control" name="autor" value="<?php echo $row['autor'] ?>" required>
                        </div>
                        <div style="max-width: 100%;padding-right: calc(var(--bs-gutter-x) * .5); padding-left: calc(var(--bs-gutter-x) * .5);margin-top: var(--bs-gutter-y);">
                            <label for="inputPassword5" class="form-label">Descripción</label>
                            <input type="text" class="form-control" name="descripcion" value="<?php echo $row['descripcion'] ?>" required>
                        </div>
                        <div  style="max-width: 100%;padding-right: calc(var(--bs-gutter-x) * .5); padding-left: calc(var(--bs-gutter-x) * .5);margin-top: var(--bs-gutter-y);">
                            <label for="inputState" class="form-label">Categoria</label>
                            <select id="inputState" class="form-select" required name="categoria">
                                <option selected>Selecciona una opción</option>
                                <option value="1">Test</option>
                                <option value="2">Test 2</option>
                                <option value="3">Test 3</option>
                            </select>
                        </div>
                    </div>
                    <!-- <div class="col-md-6">
                        <label for="inputState" class="form-label">Subir Imagen</label>
                        <input type="file" class="btn btn-primary" accept="image/png, .jpeg, .jpg, image/gif" />
                    </div> -->
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Texto</label>
                        <textarea class="form-control" rows="9" name="texto_blog"><?php echo $row['texto_blog'] ?></textarea>
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