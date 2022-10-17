<!-- formulario de alta de tarea -->
<form action="add" method="POST" class="my-4">
    <div class="row">
            <div class="col-9">
                <div class="form-group">
                        <label>Fecha</label>
                        <input name="fecha" type="text" class="form-control" required class="form-control">
                </div>
                <div class="form-group">
                        <label>Ida</label>
                        <input name="ida" type="text" class="form-control" required class="form-control">
                </div>
                <div class="form-group">
                        <label>Vuelta</label>
                        <input name="vuelta" type="text" class="form-control" required class="form-control">
                </div>
                <div class="form-group">
                        <label>Precio</label>
                        <input name="precio" type="text" class="form-control" required class="form-control">
                </div>
                <div class="form-group">
                        <label>Usuario</label>
                        <input name="usuario" type="text" class="form-control" required class="form-control">
                </div>
            </div>

            <div class="col-9">
            <div class="form-group">
                <label>CLASE</label>
                <select name="Clases" class="form-control">
                    <option value="Alta">Alta</option>
                    <option value="Baja">Baja</option>
                    
                </select>
            </div>
        </div>
    </div>


    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
