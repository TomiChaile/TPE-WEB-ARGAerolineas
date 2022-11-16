<form action="addpasaje" method="POST" class="my-4">
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
                        <input name="precio" type="number" class="form-control" required class="form-control">
                </div>
               
                <div class="form-group">
                        <label>Destino</label>
                       
                        <select name="nombre" required class="form-control"> 

                        {foreach from=$destinos  item=$destino}
                                
                                <option value={$destino.id_destino}>{$destino.nombre}</option>
                              {/foreach}
                        </select>
                </div>
                

                <div class="form-group">
                <label>CLASE</label>
                <select name="clase" class="form-control">
                    <option name="clase" value="alta">Alta</option>
                    <option name="clase" value="media">Media</option>
                    <option name="clase" value="baja">Baja</option>
                    
                </select>
                </div>
            </div>

            
            
        
    </div>


    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
