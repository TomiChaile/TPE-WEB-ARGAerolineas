<?php
/* Smarty version 4.2.1, created on 2022-10-17 02:37:23
  from 'C:\tpe-\htdocs\tpe\templates\PasajesTask.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634ca3c35a33f9_18837575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f937e3aef0d908b04b15fa3fa9a5456aca25664' => 
    array (
      0 => 'C:\\tpe-\\htdocs\\tpe\\templates\\PasajesTask.tpl',
      1 => 1665967038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634ca3c35a33f9_18837575 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <h2>Lista Por ciudad: <?php echo $_smarty_tpl->tpl_vars['destinos']->value;?>
 </h2>
    

    <table>
                <thead>
                    <tr>
                        <th>Fecha</th>  
                        <th>Ida</th> 
                        <th>Vuelta</th>  
                        <th>Precio</th> 
                    </tr>
                </thead> 
                <tbody>
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['boleto']->value, 'pasaje');
$_smarty_tpl->tpl_vars['pasaje']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pasaje']->value) {
$_smarty_tpl->tpl_vars['pasaje']->do_else = false;
?>
       
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['pasaje']->value['fecha'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['pasaje']->value['ida'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['pasaje']->value['vuelta'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['pasaje']->value['precio'];?>
</td>
                    
                </tr>
                    
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
    
            <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   
    </tbody>
    </table><?php }
}
