<?php
/* Smarty version 4.2.1, created on 2022-11-13 21:06:31
  from 'C:\xampp2\htdocs\tpe\templates\showError.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63714e478170d9_41518523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fcda87bf272e807c83a806852ab54533dc778c4' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\tpe\\templates\\showError.tpl',
      1 => 1668369987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63714e478170d9_41518523 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="card text-bg-danger mb-3 - mt-5 w-25" style="max-width: 18rem">
  <div class="card-header">Cuidado!</div>
  <div class="card-body">No se puede eliminar el pasaje.</h5>
    <p class="card-text">Pertenece a Destinos disponibles</p>
  </div>
</div>

<a class="nav-link  mt-3 mb-3 " aria-current="page" href="pasajes">Volver</a>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
