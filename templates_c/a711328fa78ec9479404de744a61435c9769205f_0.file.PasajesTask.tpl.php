<?php
/* Smarty version 4.2.1, created on 2022-11-06 19:47:40
  from 'C:\xampp2\htdocs\tpe\templates\PasajesTask.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6368014c809490_84947401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a711328fa78ec9479404de744a61435c9769205f' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\tpe\\templates\\PasajesTask.tpl',
      1 => 1667760458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6368014c809490_84947401 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form action="pasajes" method="POST" class="mt-3 mb-3  mx-auto w-75 row row-cols-lg-auto g-3 align-items-center">
  <div class="col">
    <select name="id_destino" class="form-select" aria-label="Default select example">
      <option selected>Selecciona por precio</option>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['especificaciones']->value, 'especificacion');
$_smarty_tpl->tpl_vars['especificacion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['especificacion']->value) {
$_smarty_tpl->tpl_vars['especificacion']->do_else = false;
?>
        <option value=<?php echo $_smarty_tpl->tpl_vars['especificacion']->value['id_destino'];?>
><?php echo $_smarty_tpl->tpl_vars['especificacion']->value['precio'];?>
</option>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
  </div>
  <button type="submit" href="pasajes/<?php echo $_smarty_tpl->tpl_vars['especificacion']->value['id_destino'];?>
" class="btn btn-dark">Filtrar</button>
  </div>
</form>

    <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Fecha</th>  
                        <th scope="col">Ida</th> 
                        <th scope="col">Vuelta</th>  
                        <th scope="col">Precio</th> 
                        <th scope="col">Nombre</th> 
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
                    <td><?php echo $_smarty_tpl->tpl_vars['boleto']->value['nombre'];?>
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
