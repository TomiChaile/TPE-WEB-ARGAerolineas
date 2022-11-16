{include file="header.tpl"}



<h1>DESTINOS PARA VISITAR JUNTOS!</h1>

{if isset ($smarty.session.email)}
    <form action="agregar" method="POST" class="my-4">
    <div class="form-group">
    <label>Agrega Destinos</label>
    <input name="nombre" type="text" class="form-control" required class="form-control">
    </div>
    <div class="form-group">
                <label>CLASE</label>
                <select name="Clase" class="form-control">
                    <option name="Clase" value="Alta">Alta</option>
                    <option name="Clase" value="Media">Media</option>
                    <option name="Clase" value="Baja">Baja</option>
                </select>
     </div>
    <button type="submit" class="btn btn-primary mt-2">Agregar</button>
    </form>
{/if}

<h2>Para filtrar por clases seleccione la clase que desea ver</h2>
  




<table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Destinos</th>
                <th scope="col">Clase</th>
                {if isset ($smarty.session.email)}
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                    {/if}
            </tr>
        </thead>    
<tbody>

{foreach from=$destinos item=$destino}
    

    <tr>
        <td><a href='DetalleDestino/{$destino.id_destino}' type='button' class='btn'>{$destino.nombre}</a></td>
        <td><a href='DetalleClase/{$destino.clase}' type='button' class='btn btn-outline-secondary'>{$destino.clase}</a></td>
        {if isset ($smarty.session.email)}
            <td><a href='editdestino/{$destino.id_destino}' type='button' class='btn btn-success'>Editar</a></td>
            <td><a href='eliminar/{$destino.id_destino}' type='button' class='btn btn-danger'>Borrar</a></td>
        {/if}  
    </tr>        
{/foreach}

 




    
{include file="footer.tpl"}

    