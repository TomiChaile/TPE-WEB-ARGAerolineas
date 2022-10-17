<?php
/* Smarty version 4.2.1, created on 2022-10-17 23:12:17
  from 'C:\tpe-\htdocs\tpe\templates\taskList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dc53162a0a5_40524038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12eb6c9437181f565ee2f6a8ed351f54d282f946' => 
    array (
      0 => 'C:\\tpe-\\htdocs\\tpe\\templates\\taskList.tpl',
      1 => 1666041083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_alta.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634dc53162a0a5_40524038 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="titulos">Reserva tu vuelo</h1>

<?php $_smarty_tpl->_subTemplateRender("file:form_alta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- lista de tareas -->
<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
$_smarty_tpl->tpl_vars['task']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->do_else = false;
?>
        <li class='
                list-group-item d-flex justify-content-between align-items-center
                <?php if ($_smarty_tpl->tpl_vars['task']->value->finalizada) {?> finalizada <?php }?>
            '>
            <span> <?php echo $_smarty_tpl->tpl_vars['task']->value->fecha;?>
 / <?php echo $_smarty_tpl->tpl_vars['task']->value->ida;?>
 / <?php echo $_smarty_tpl->tpl_vars['task']->value->vuelta;?>
 / <?php echo $_smarty_tpl->tpl_vars['task']->value->precio;?>
 / <?php echo $_smarty_tpl->tpl_vars['task']->value->usuario;?>
 / <?php echo $_smarty_tpl->tpl_vars['task']->value->Clases;?>
  </span>
            <div class="ml-auto">
                <?php if (!$_smarty_tpl->tpl_vars['task']->value->finalizada) {?>
                    <a href='finalize/<?php echo $_smarty_tpl->tpl_vars['task']->value->id;?>
' type='button' class='btn btn-success'>Finalizar</a>
                <?php }?>
                <a href='delete/<?php echo $_smarty_tpl->tpl_vars['task']->value->id;?>
' type='button' class='btn btn-danger'>Borrar</a>
            </div>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<p class="mt-3"><small>Mostrando <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 pasajes</small></p>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
