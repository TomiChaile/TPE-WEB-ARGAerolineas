<?php
/* Smarty version 4.2.1, created on 2022-11-15 22:17:42
  from 'C:\xampp2\htdocs\tpe\templates\DetalleDestino.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_637401f646a981_84216634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f5e6b99a7b8e8912ce5a8b299802bd713890130' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\tpe\\templates\\DetalleDestino.tpl',
      1 => 1668544015,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_637401f646a981_84216634 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Pasaje con destino a <?php echo $_smarty_tpl->tpl_vars['pasaje']->value->nombre;?>
</h1>
<table class="table">
  <thead>
    <tr>
        <th scope="col">Fecha</th>  
        <th scope="col">Ida</th> 
        <th scope="col">Vuelta</th>  
        <th scope="col">Precio</th> 
    </tr>
  </thead>
 
    <tbody>
      <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['pasaje']->value->fecha;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['pasaje']->value->ida;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['pasaje']->value->vuelta;?>
</td>
      <td>U$D <?php echo $_smarty_tpl->tpl_vars['pasaje']->value->precio;?>
</td>
      </tr>
    </tbody>

    

</table><?php }
}
