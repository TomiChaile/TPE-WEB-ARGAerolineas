<?php
/* Smarty version 4.2.1, created on 2022-11-16 02:27:05
  from 'C:\xampp2\htdocs\tpe\templates\DetalleClase.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63743c691dd8c4_21657735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c349bd36badd67af46df8e7674d676ab11b1562' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\tpe\\templates\\DetalleClase.tpl',
      1 => 1668562020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_63743c691dd8c4_21657735 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<table class="table">
  <thead>
    <tr>
       
        <th scope="col">Destino</th>  
        <th scope="col">Clase</th> 
    </tr>
  </thead>
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clases']->value, 'clase');
$_smarty_tpl->tpl_vars['clase']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['clase']->value) {
$_smarty_tpl->tpl_vars['clase']->do_else = false;
?>
      <tr>
      
      <td><?php echo $_smarty_tpl->tpl_vars['clase']->value->nombre;?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['clase']->value->clase;?>
</td>
    
      </tr>
<?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

    </tbody>
</table><?php }
}
