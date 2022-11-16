{include file="header.tpl"}





{if isset ($smarty.session.email)}
{include file="form_altaPasaje.tpl"}
{/if}





    <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Fecha</th>  
                        <th scope="col">Ida</th> 
                        <th scope="col">Vuelta</th>  
                        <th scope="col">Precio</th> 
                        <th scope="col">Destino</th> 
                        <th scope="col">Clase</th> 
                        {if isset ($smarty.session.email)}
                          <th scope="col">Editar</th>  
                          <th scope="col">Eliminar</th>  
                        {/if}
                    </tr>
                </thead> 
                <tbody>
    
    {foreach from=$pasaje item=$boleto}


       
                <tr>
                    <td>{$boleto.fecha}</td>
                    <td>{$boleto.ida}</td>
                    <td>{$boleto.vuelta}</td>
                    <td>U$D {$boleto.precio}</td>
                    <td> {foreach from=$destinos item=$destino}
                      {if $destino.id_destino == $boleto.id_destino}
                        {$destino.nombre} 
                      {/if}
                      {/foreach}</td>
                    <td>{$boleto.clase}</td>
                    {if isset ($smarty.session.email)}
                      <td><a href='Edit/{$boleto.id_pasaje}' type='button' class='btn btn-success'>Editar</a></td>
                    <td><a href='Delete/{$boleto.id_pasaje}' type='button' class='btn btn-danger'>Borrar</a></td> 
                    {/if}  
                    
                </tr>
                    
    {/foreach} 
     
    </tbody>
    </table>
    {include file='footer.tpl'}  
