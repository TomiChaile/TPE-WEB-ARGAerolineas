<?php
/* Smarty version 4.2.1, created on 2022-10-17 20:08:19
  from 'C:\tpe-\htdocs\tpe\templates\form_alta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d9a1348fac1_81412470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '202868a796fcab8f14362a1686804689c9e38274' => 
    array (
      0 => 'C:\\tpe-\\htdocs\\tpe\\templates\\form_alta.tpl',
      1 => 1666030094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634d9a1348fac1_81412470 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de tarea -->
<form action="add" method="POST" class="my-4">
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
                        <input name="precio" type="text" class="form-control" required class="form-control">
                </div>
                <div class="form-group">
                        <label>Usuario</label>
                        <input name="usuario" type="text" class="form-control" required class="form-control">
                </div>
            </div>

            <div class="col-9">
            <div class="form-group">
                <label>CLASE</label>
                <select name="Clases" class="form-control">
                    <option value="Alta">Alta</option>
                    <option value="Baja">Baja</option>
                    
                </select>
            </div>
        </div>
    </div>


    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
<?php }
}
