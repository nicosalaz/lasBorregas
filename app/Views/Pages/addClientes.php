<?php echo $this->extend('Pages/plantilla'); ?>

<?php echo $this->section('contenido'); ?>
<div class="add">
    <div class="add-form">
        <form action="<?php echo base_url('/clientes/agregar'); ?>" method="post" autocomplete="off">
            <h3>Datos Personales</h3>
            <hr>
            <div class="row g-3">
                <div class="col-md-5">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="col-md-5">
                    <label for="apaterno" class="form-label">Apellido Paterno</label>
                    <input type="text" class="form-control" id="apaterno" name="apaterno" required>
                </div>
                <div class="col-md-5">
                    <label for="amaterno" class="form-label">Apellido materno</label>
                    <input type="text" class="form-control" id="amaterno" name="amaterno" required>
                </div>
                <div class="col-md-5">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" required>
                </div>
            </div>
            <br>
            <h3>Domicilio</h3>
            <hr>
            <div class="row g-3">
                <div class="col-md-4">
                    <label for="calle" class="form-label">Calle</label>
                    <input type="text" class="form-control" id="calle" name="calle" required>
                </div>
                <div class="col-md-3">
                    <label for="numb" class="form-label">Número</label>
                    <input type="text" class="form-control" id="numb" name="numb" required>
                </div>
                <div class="col-md-3">
                    <label for="codpostal" class="form-label">Código Postal</label>
                    <input type="text" class="form-control" id="codpostal" name="codpostal" required>
                </div>
                <div class="col-md-5">
                    <label for="colonia" class="form-label">Colonia</label>
                    <input type="text" class="form-control" id="colonia" name="colonia" required>
                </div>
                <div class="col-md-5">
                    <label for="lugar" class="form-label">Lugar</label>
                    <input type="text" class="form-control" id="lugar" name="lugar" required>
                </div>
                <div class="col-md-6">
                    <label for="municipio" class="form-label">Municipio</label>
                    <input type="text" class="form-control" id="municipio" name="municipio" required>
                </div>
            </div>
            <br>
            <h3>Cuenta</h3>
            <hr>
            <div class="row g-3">
                <div class="col-md-12">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" required>

                </div>
                <div class="col-md-5">
                    <label for="contrasena" class="form-label">Clave</label>
                    <input type="password" oninput="validar()" class="form-control" id="contrasena" name="contrasena" required>
                </div>
                <div class="col-md-5">
                    <label for="ReContrasena" class="form-label">Clave nuevamente</label>
                    <input type="password" required class="form-control" id="ReContrasena" name="ReContrasena" oninput="validar()">
                </div>
            </div>
            <p id="resultado"></p>
            <div style="margin-top: 20px;">
                <button type="submit" id="btn-addCliente" class="btn btn-primary" disabled="off">Registrar Cliente</button>
            </div>
        </form>
    </div>
</div>

<?php echo $this->endSection(); ?>