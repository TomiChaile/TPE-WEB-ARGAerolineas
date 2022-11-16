{include file="header.tpl"}

<h1>Editar Pasaje</h1>

<form action="update/{$edit->id}" method="POST" class="my-4">

        <div class="col-12">
            <div class="form-group">
                <label>Fecha</label>
                <input name="fecha" type="text" class="form-control" value="{$edit->fecha}" required>
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label>Ida</label>
                <input name="ida" type="text" class="form-control" value="{$edit->ida}" required>
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label>Vuelta</label>
                <input name="vuelta" type="text" class="form-control" value="{$edit->vuelta}" required>
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label>Precio</label>
                <input name="precio" type="number" class="form-control" value="{$edit->precio}" required>
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label>Usuario</label>
                <input name="usuario" type="text" class="form-control" value="{$edit->usuario}" required>
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label>CLASE</label>
                <select name="clase" class="form-control" value="{$edit->clase}" required>
                    <option name="clase" value="Alta">Alta</option>
                    <option name="clase" value="Media">Media</option>
                    <option name="clase" value="Baja">Baja</option>
                </select>
            </div>
        </div>     
        
        <div class="col-12">
            <div class="form-group">
                <input name="id" type="hidden" class="form-control" value="{$edit->id}">
                <input type="hidden" name="oculto">
                <button type="submit" class="btn btn-primary btn-lg">Confirmar</button>
            </div>
        </div>
    
</form>


