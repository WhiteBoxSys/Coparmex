<div class="modal fade" id="EditarBlog<?php echo $row['id'] ?>" tabindex="-1">
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
                <form class="row g-3" action="../controllers/BlogGridController.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    <div class="col-md-12">
                        <label for="inputName5" class="form-label">Titulo</label>
                        <input type="text" class="form-control" id="inputName5" name="titulo" value="<?php echo $row['titulo'] ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label for="inputEmail5" class="form-label">Autor</label>
                        <input type="text" class="form-control" name="autor" value="<?php echo $row['autor'] ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label for="inputPassword5" class="form-label">Descripción</label>
                        <input type="text" class="form-control" name="descripcion" value="<?php echo $row['descripcion'] ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Categoria</label>
                        <select id="inputState" class="form-select" required name="categoria">
                            <option selected>Selecciona una opción</option>
                            <option value="1">Test</option>
                            <option value="2">Test 2</option>
                            <option value="3">Test 3</option>
                        </select>
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