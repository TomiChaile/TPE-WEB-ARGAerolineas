<?php
/* Smarty version 4.2.1, created on 2022-11-13 21:40:36
  from 'C:\xampp2\htdocs\tpe\templates\form_editD.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63715644589eb4_83949002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9003c5edb4ea95ba77f501786cf05cde2e776adf' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\tpe\\templates\\form_editD.tpl',
      1 => 1668372031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_63715644589eb4_83949002 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Editar Destino</h1>

<form action="updatedestino/<?php echo $_smarty_tpl->tpl_vars['edit']->value->id_destino;?>
" method="POST" class="my-4">

        <div class="col-12">
            <div class="form-group">
                <label>Destino</label>
                <input name="nombre" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value->nombre;?>
" required>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <input name="id_destino" type="hidden" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value->id_destino;?>
">
                <input type="hidden" name="oculto">
                <button type="submit" class="btn btn-primary btn-lg">Confirmar</button>
            </div>
        </div>
</form><?php }
}
