<?php
/* Smarty version 4.2.1, created on 2022-11-13 19:03:15
  from 'C:\xampp2\htdocs\tpe\templates\cant_remove.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6371316307a339_77985608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef749026b016e826e1dc32aaa6d48db5112cedbe' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\tpe\\templates\\cant_remove.tpl',
      1 => 1668362494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:Destinos.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6371316307a339_77985608 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>NO SE PUEDE ELIMINAR EL PASAJE</h1>
<p>Para poder eliminar el pasaje '<?php echo $_smarty_tpl->tpl_vars['pasaje']->value->id;?>
' primero debe quitar la referencia a éste de los siguientes Destinos:<p>

<?php $_smarty_tpl->_subTemplateRender("file:Destinos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
