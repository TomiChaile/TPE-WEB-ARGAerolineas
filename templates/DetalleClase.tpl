{include file="header.tpl"}



<table class="table">
  <thead>
    <tr>
       
        <th scope="col">Destino</th>  
        <th scope="col">Clase</th> 
    </tr>
  </thead>
  <tbody>
  {foreach from=$clases item=$clase}
      <tr>
      
      <td>{$clase->nombre}</td>
      <td>{$clase->clase}</td>
    
      </tr>
{{/foreach}}
    </tbody>
</table>