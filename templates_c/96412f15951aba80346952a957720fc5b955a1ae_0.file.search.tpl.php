<?php
/* Smarty version 4.2.1, created on 2022-11-15 14:32:50
  from 'C:\xampp2\htdocs\tpe\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_637395020d2b26_44763556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96412f15951aba80346952a957720fc5b955a1ae' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\tpe\\templates\\search.tpl',
      1 => 1668519168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637395020d2b26_44763556 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid contenedorsearch">
    <form action="searchCategory" method="post">
        <input class="form-label" type="text" placeholder="Buscar..." id="busqueda" name="busqueda" aria-label="Search" >
        <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
</div>
<?php }
}
