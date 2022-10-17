{include file="header.tpl"}



<!-- lista de tareas -->


        
    <!-- lista de tareas -->
    <h1>DESTINOS PARA VISITAR JUNTOS!</h1>
<ul class="list-group">
{foreach from=$destinos item=$destino}
    
    <li class='
            list-group-item d-flex justify-content-between align-items-center '>
       <a href="destinos">{$destino.nombre} </a>
        
        
    
        
        
         
    </li>
{/foreach}
</ul>



    
{include file="footer.tpl"}

    