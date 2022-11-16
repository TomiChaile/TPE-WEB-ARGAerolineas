<?php
/* Smarty version 4.2.1, created on 2022-11-07 01:18:54
  from 'C:\xampp2\htdocs\tpe\templates\destinosTask.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63684eee073436_29596630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f648a5cb060814942c971eb2ffa94579b1fb9aca' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\tpe\\templates\\destinosTask.tpl',
      1 => 1667780330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63684eee073436_29596630 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<h1>DESTINOS PARA VISITAR JUNTOS!</h1>


<table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Destinos</th>
                <th scope="col">Ver Mas</th>
            </tr>
        </thead>    
<tbody>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['destinos']->value, 'destino');
$_smarty_tpl->tpl_vars['destino']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['destino']->value) {
$_smarty_tpl->tpl_vars['destino']->do_else = false;
?>
    

    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['destino']->value['nombre'];?>
</td>
        <td><a href='DetalleDestino/<?php echo $_smarty_tpl->tpl_vars['destino']->value['id_destino'];?>
' type='button' class='btn btn-info'>Ver mas</a></td>
    </tr>    
   
        
        
    
        
        
         
    
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>




    
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php }
}
