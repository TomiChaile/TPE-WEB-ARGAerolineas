{include file="header.tpl"}

<h1>Editar Destino</h1>

<form action="updatedestino/{$edit->id_destino}" method="POST" class="my-4">

        <div class="col-12">
            <div class="form-group">
                <label>Destino</label>
                <input name="nombre" type="text" class="form-control" value="{$edit->nombre}" required>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <input name="id_destino" type="hidden" class="form-control" value="{$edit->id_destino}">
                <input type="hidden" name="oculto">
                <button type="submit" class="btn btn-primary btn-lg">Confirmar</button>
            </div>
        </div>
</form>