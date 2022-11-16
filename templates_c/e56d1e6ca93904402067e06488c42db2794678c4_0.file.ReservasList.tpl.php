<?php
/* Smarty version 4.2.1, created on 2022-11-08 23:28:56
  from 'C:\xampp2\htdocs\tpe\templates\ReservasList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636ad8286aa988_55179450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e56d1e6ca93904402067e06488c42db2794678c4' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\tpe\\templates\\ReservasList.tpl',
      1 => 1667946532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_alta.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_636ad8286aa988_55179450 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="titulos">Reserva tu vuelo</h1>

<?php $_smarty_tpl->_subTemplateRender("file:form_alta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- lista de tareas -->
<div class="item-body">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Fecha</th>
                <th scope="col">Ida</th>
                <th scope="col">Vuelta</th>
                <th scope="col">Precio</th>
                <th scope="col">Usuario</th>
                <th scope="col">Clase</th>
                <?php if ((isset($_SESSION['email']))) {?>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
                <?php }?>
            </tr>
        </thead>
        <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reservas']->value, 'reserva');
$_smarty_tpl->tpl_vars['reserva']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reserva']->value) {
$_smarty_tpl->tpl_vars['reserva']->do_else = false;
?>
        <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['reserva']->value->fecha;?>
</td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['reserva']->value->ida;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['reserva']->value->vuelta;?>
</td>
                    <td>U$D <?php echo $_smarty_tpl->tpl_vars['reserva']->value->precio;?>
 </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['reserva']->value->usuario;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['reserva']->value->clase;?>
</td>
                    <?php if ((isset($_SESSION['email']))) {?>
                    <td><a href='edit/<?php echo $_smarty_tpl->tpl_vars['reserva']->value->id;?>
' type='button' class='btn btn-success'>Editar</a></td>
                    <td><a href='delete/<?php echo $_smarty_tpl->tpl_vars['reserva']->value->id;?>
' type='button' class='btn btn-danger'>Borrar</a></td>
                    <?php }?>   
                    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


<p class="mt-3"><small>Mostrando <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 pasajes</small></p>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
