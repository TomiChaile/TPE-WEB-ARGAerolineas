<?php
/* Smarty version 4.2.1, created on 2022-11-15 23:51:59
  from 'C:\xampp2\htdocs\tpe\templates\Destinos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6374180ff27e93_76468719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '187259ee5eab32547d7d38b5e24d1c11577c1a17' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\tpe\\templates\\Destinos.tpl',
      1 => 1668552713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6374180ff27e93_76468719 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<h1>DESTINOS PARA VISITAR JUNTOS!</h1>

<?php if ((isset($_SESSION['email']))) {?>
    <form action="agregar" method="POST" class="my-4">
    <div class="form-group">
    <label>Agrega Destinos</label>
    <input name="nombre" type="text" class="form-control" required class="form-control">
    </div>
    <div class="form-group">
                <label>CLASE</label>
                <select name="Clase" class="form-control">
                    <option name="Clase" value="Alta">Alta</option>
                    <option name="Clase" value="Media">Media</option>
                    <option name="Clase" value="Baja">Baja</option>
                </select>
     </div>
    <button type="submit" class="btn btn-primary mt-2">Agregar</button>
    </form>
<?php }?>

<h2>Para filtrar por clases seleccione la clase que desea ver</h2>
  




<table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Destinos</th>
                <th scope="col">Clase</th>
                <?php if ((isset($_SESSION['email']))) {?>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                    <?php }?>
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
        <td><a href='DetalleDestino/<?php echo $_smarty_tpl->tpl_vars['destino']->value['id_destino'];?>
' type='button' class='btn'><?php echo $_smarty_tpl->tpl_vars['destino']->value['nombre'];?>
</a></td>
        <td><a href='DetalleClase/<?php echo $_smarty_tpl->tpl_vars['destino']->value['clase'];?>
' type='button' class='btn btn-outline-secondary'><?php echo $_smarty_tpl->tpl_vars['destino']->value['clase'];?>
</a></td>
        <?php if ((isset($_SESSION['email']))) {?>
            <td><a href='editdestino/<?php echo $_smarty_tpl->tpl_vars['destino']->value['id_destino'];?>
' type='button' class='btn btn-success'>Editar</a></td>
            <td><a href='eliminar/<?php echo $_smarty_tpl->tpl_vars['destino']->value['id_destino'];?>
' type='button' class='btn btn-danger'>Borrar</a></td>
        <?php }?>  
    </tr>        
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

 




    
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php }
}
