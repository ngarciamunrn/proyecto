<div class="row">
    <div class="col-6">
        <form action="<?= base_url('user/save') ?>" method="POST">
            <input type="hidden" name="id" value="" >
            <div class="row mb-3">
                <label for="inputNombre" class="col-sm-4 col-form-label">Nombre</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputNombre" name="nombre">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputApellido" class="col-sm-4 col-form-label">Apellido</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputApellido" name="apellido">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputUsername" class="col-sm-4 col-form-label">Nombre de Usuario</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputUsername" name="username" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="inputEmail" name="email">
                </div>
            </div>


            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>