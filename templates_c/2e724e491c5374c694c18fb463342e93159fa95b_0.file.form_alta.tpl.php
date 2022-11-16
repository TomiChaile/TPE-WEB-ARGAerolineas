<?php
/* Smarty version 4.2.1, created on 2022-11-16 02:30:43
  from 'C:\xampp2\htdocs\tpe\templates\form_alta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63743d436c5c58_01749613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e724e491c5374c694c18fb463342e93159fa95b' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\tpe\\templates\\form_alta.tpl',
      1 => 1668562149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63743d436c5c58_01749613 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de tarea -->
<form action="add" method="POST" class="my-4">
    <div class="row">
            <div class="col-9">
                <div class="form-group">
                        <label>Fecha</label>
                        <input name="fecha" type="text" class="form-control" required >
                </div>
                <div class="form-group">
                        <label>Ida</label>
                        <input name="ida" type="text" class="form-control" required >
                </div>
                <div class="form-group">
                        <label>Vuelta</label>
                        <input name="vuelta" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                        <label>Precio</label>
                        <input name="precio" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                        <label>Usuario</label>
                        <input name="usuario" type="text" class="form-control" required >
                </div>

                <div class="form-group">
                <label>CLASE</label>
                <select name="clase" class="form-control">
                    <option name="clase" value="Alta">Alta</option>
                    <option name="clase" value="Media">Media</option>
                    <option name="clase" value="Baja">Baja</option>
                    
                </select>
                </div>
            </div>

            
            
        
    </div>


    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
<?php }
}
