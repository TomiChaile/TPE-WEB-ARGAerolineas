<?php
/* Smarty version 4.2.1, created on 2022-11-15 19:22:54
  from 'C:\xampp2\htdocs\tpe\templates\clases.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6373d8fe37aaa1_45927706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cb702c3161538a256d144381c282a5c0eaf472c' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\tpe\\templates\\clases.tpl',
      1 => 1668536536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6373d8fe37aaa1_45927706 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clase']->value, 'clases');
$_smarty_tpl->tpl_vars['clases']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['clases']->value) {
$_smarty_tpl->tpl_vars['clases']->do_else = false;
?>



<ul>
    <li><a href='clases/<?php echo $_smarty_tpl->tpl_vars['clases']->value['id_clase'];?>
' type='button' class='btn'><?php echo $_smarty_tpl->tpl_vars['clases']->value['clase'];?>
</a></li>
   
</ul>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
