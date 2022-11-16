<?php
/* Smarty version 4.2.1, created on 2022-11-16 02:20:00
  from 'C:\xampp2\htdocs\tpe\templates\Pasajes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63743ac0a2dfd7_64293238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ab475af5e415613a12de28ed57c4b0fe70a10fb' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\tpe\\templates\\Pasajes.tpl',
      1 => 1668561596,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_altaPasaje.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63743ac0a2dfd7_64293238 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>





<?php if ((isset($_SESSION['email']))) {
$_smarty_tpl->_subTemplateRender("file:form_altaPasaje.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>





    <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Fecha</th>  
                        <th scope="col">Ida</th> 
                        <th scope="col">Vuelta</th>  
                        <th scope="col">Precio</th> 
                        <th scope="col">Destino</th> 
                        <th scope="col">Clase</th> 
                        <?php if ((isset($_SESSION['email']))) {?>
                          <th scope="col">Editar</th>  
                          <th scope="col">Eliminar</th>  
                        <?php }?>
                    </tr>
                </thead> 
                <tbody>
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pasaje']->value, 'boleto');
$_smarty_tpl->tpl_vars['boleto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['boleto']->value) {
$_smarty_tpl->tpl_vars['boleto']->do_else = false;
?>


       
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['boleto']->value['fecha'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['boleto']->value['ida'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['boleto']->value['vuelta'];?>
</td>
                    <td>U$D <?php echo $_smarty_tpl->tpl_vars['boleto']->value['precio'];?>
</td>
                    <td> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['destinos']->value, 'destino');
$_smarty_tpl->tpl_vars['destino']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['destino']->value) {
$_smarty_tpl->tpl_vars['destino']->do_else = false;
?>
                      <?php if ($_smarty_tpl->tpl_vars['destino']->value['id_destino'] == $_smarty_tpl->tpl_vars['boleto']->value['id_destino']) {?>
                        <?php echo $_smarty_tpl->tpl_vars['destino']->value['nombre'];?>
 
                      <?php }?>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['boleto']->value['clase'];?>
</td>
                    <?php if ((isset($_SESSION['email']))) {?>
                      <td><a href='Edit/<?php echo $_smarty_tpl->tpl_vars['boleto']->value['id_pasaje'];?>
' type='button' class='btn btn-success'>Editar</a></td>
                    <td><a href='Delete/<?php echo $_smarty_tpl->tpl_vars['boleto']->value['id_pasaje'];?>
' type='button' class='btn btn-danger'>Borrar</a></td> 
                    <?php }?>  
                    
                </tr>
                    
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
     
    </tbody>
    </table>
    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
<?php }
}
