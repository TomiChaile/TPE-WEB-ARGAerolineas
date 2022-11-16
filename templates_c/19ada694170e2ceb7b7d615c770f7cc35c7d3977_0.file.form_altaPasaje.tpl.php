<?php
/* Smarty version 4.2.1, created on 2022-11-16 00:48:22
  from 'C:\xampp2\htdocs\tpe\templates\form_altaPasaje.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_637425467dd788_96319733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19ada694170e2ceb7b7d615c770f7cc35c7d3977' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\tpe\\templates\\form_altaPasaje.tpl',
      1 => 1668556099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637425467dd788_96319733 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="addpasaje" method="POST" class="my-4">
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

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['destinos']->value, 'destino');
$_smarty_tpl->tpl_vars['destino']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['destino']->value) {
$_smarty_tpl->tpl_vars['destino']->do_else = false;
?>
                                
                                <option value=<?php echo $_smarty_tpl->tpl_vars['destino']->value['id_destino'];?>
><?php echo $_smarty_tpl->tpl_vars['destino']->value['nombre'];?>
</option>
                              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
<?php }
}
