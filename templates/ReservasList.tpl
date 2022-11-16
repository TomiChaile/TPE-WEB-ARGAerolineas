{include file="header.tpl"}

<h1 class="titulos">Reserva tu vuelo</h1>

{include file="form_alta.tpl"}

<!-- lista de tareas -->
<div class="item-body">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Fecha</th>
                <th scope="col">Ida</th>
                <th scope="col">Vuelta</th>
                <th scope="col">Precio</th>
                <th scope="col">Usuario</th>
                <th scope="col">Clase</th>
                {if isset ($smarty.session.email)}
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
                {/if}
            </tr>
        </thead>
        <tbody>
    {foreach from=$reservas item=$reserva}
        <tr>
                    <td>{$reserva->fecha}</td>
                    <td> {$reserva->ida}</td>
                    <td>{$reserva->vuelta}</td>
                    <td>U$D {$reserva->precio} </td>
                    <td>{$reserva->usuario}</td>
                    <td>{$reserva->clase}</td>
                    {if isset ($smarty.session.email)}
                    <td><a href='edit/{$reserva->id}' type='button' class='btn btn-success'>Editar</a></td>
                    <td><a href='delete/{$reserva->id}' type='button' class='btn btn-danger'>Borrar</a></td>
                    {/if}   
                    </tr>
    {/foreach}


<p class="mt-3"><small>Mostrando {$count} pasajes</small></p>

{include file="footer.tpl"}

