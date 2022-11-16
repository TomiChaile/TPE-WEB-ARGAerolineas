<?php
/* Smarty version 4.2.1, created on 2022-11-13 23:42:32
  from 'C:\xampp2\htdocs\tpe\templates\form_editP.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_637172d87088e8_36851165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60ce7106b350c2389616bec90b87cbd16aacb56a' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\tpe\\templates\\form_editP.tpl',
      1 => 1668379349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_637172d87088e8_36851165 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Editar Pasaje</h1>

<form action="Update/<?php echo $_smarty_tpl->tpl_vars['edit']->value->id_pasaje;?>
" method="POST" class="my-4">

        <div class="col-12">
            <div class="form-group">
                <label>Fecha</label>
                <input name="fecha" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value->fecha;?>
" required>
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label>Ida</label>
                <input name="ida" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value->ida;?>
" required>
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label>Vuelta</label>
                <input name="vuelta" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value->vuelta;?>
" required>
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label>Precio</label>
                <input name="precio" type="number" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value->precio;?>
" required>
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label>Destino</label>
                <input name="nombre" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value->nombre;?>
" required>
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label>CLASE</label>
                <select name="clase" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value->clase;?>
" required>
                    <option name="clase" value="Alta">Alta</option>
                    <option name="clase" value="Media">Media</option>
                    <option name="clase" value="Baja">Baja</option>
                </select>
            </div>
        </div>     
        
        <div class="col-12">
            <div class="form-group">
                <input name="id_pasaje" type="hidden" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value->id_pasaje;?>
">
                <input type="hidden" name="oculto">
                <button type="submit" class="btn btn-primary btn-lg">Confirmar</button>
            </div>
        </div>
    
</form><?php }
}
