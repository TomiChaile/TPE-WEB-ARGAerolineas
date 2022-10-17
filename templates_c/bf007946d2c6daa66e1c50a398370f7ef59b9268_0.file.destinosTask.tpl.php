<?php
/* Smarty version 4.2.1, created on 2022-10-17 23:03:13
  from 'C:\tpe-\htdocs\tpe\templates\destinosTask.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dc311130cb3_07996969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf007946d2c6daa66e1c50a398370f7ef59b9268' => 
    array (
      0 => 'C:\\tpe-\\htdocs\\tpe\\templates\\destinosTask.tpl',
      1 => 1666040588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634dc311130cb3_07996969 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<!-- lista de tareas -->


        
    <!-- lista de tareas -->
    <h1>DESTINOS PARA VISITAR JUNTOS!</h1>
<ul class="list-group">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['destinos']->value, 'destino');
$_smarty_tpl->tpl_vars['destino']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['destino']->value) {
$_smarty_tpl->tpl_vars['destino']->do_else = false;
?>
    
    <li class='
            list-group-item d-flex justify-content-between align-items-center '>
       <a href="destinos"><?php echo $_smarty_tpl->tpl_vars['destino']->value['nombre'];?>
 </a>
        
        
    
        
        
         
    </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>



    
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php }
}
