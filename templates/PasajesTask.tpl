{include file="header.tpl"}

        <h2>Lista Por ciudad: {$destinos} </h2>
    

    <table>
                <thead>
                    <tr>
                        <th>Fecha</th>  
                        <th>Ida</th> 
                        <th>Vuelta</th>  
                        <th>Precio</th> 
                    </tr>
                </thead> 
                <tbody>
    
    {foreach from=$boleto item=$pasaje}
       
                <tr>
                    <td>{$pasaje.fecha}</td>
                    <td>{$pasaje.ida}</td>
                    <td>{$pasaje.vuelta}</td>
                    <td>{$pasaje.precio}</td>
                    
                </tr>
                    
            {/foreach} 
    
            {include file='footer.tpl'}   
    </tbody>
    </table>