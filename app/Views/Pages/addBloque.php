<?php echo $this->extend('Pages/plantilla'); ?>

<?php echo $this->section('contenido'); ?>
<div class="add">
    <div class="add-form">
        <form action="<?php echo base_url('/bloque/agregar'); ?>" method="post">
            <h3>Ingresar Datos de la Venta</h3>
            <hr>
            <div class="row g-3">
                <div class="col-md-5">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="text" class="form-control" id="fecha" name="fecha" required>
                </div>
                <div class="col-md-5">
                    <label for="tipo_venta" class="form-label">Tipo de Venta</label>
                    <input type="text" class="form-control" id="tipo_venta" name="tipo_venta" required>
                </div>
            </div>
            <p id="resultado"></p>
            <div style="margin-top: 20px;">
                <button type="submit" id="btn-addVentas" class="btn btn-primary">Registrar</button>
            </div>
        </form>
    </div>
</div>
<?php echo $this->endSection(); ?>