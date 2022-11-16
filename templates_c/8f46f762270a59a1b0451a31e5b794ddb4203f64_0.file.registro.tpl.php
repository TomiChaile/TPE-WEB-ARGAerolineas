<?php
/* Smarty version 4.2.1, created on 2022-11-07 01:24:36
  from 'C:\xampp2\htdocs\tpe\templates\registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63685044b63129_78297773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f46f762270a59a1b0451a31e5b794ddb4203f64' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\tpe\\templates\\registro.tpl',
      1 => 1667780673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63685044b63129_78297773 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="mt-5 w-25 mx-auto">


    <h1>Registrate!</h1>
    <form method="POST" action="ingresar">
  
        <div class="form-group">
        
            <label for="email">Email</label>
            <input type="email" required class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="clave">Password</label>
            <input type="password" required class="form-control" id="clave" name="clave">
        </div>

        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
            <div class="alert alert-danger mt-3">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        <?php }?>
        <button type="submit" class="btn btn-primary mt-3">Registrarme</button>
       <div>
       <h4>Ya tienes una cuenta?</h4>
       <a href='login' type='button' class='btn btn-primary mt-3'>Iniciar Sesion</a>
       </div>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
