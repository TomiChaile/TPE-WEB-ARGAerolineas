<?php
/* Smarty version 4.2.1, created on 2022-11-14 01:31:45
  from 'C:\xampp2\htdocs\tpe\templates\destinosByClase.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63718c716baba7_79967328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecb16782030f9c7f9ca779f5e844202c871127e0' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\tpe\\templates\\destinosByClase.tpl',
      1 => 1668385902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63718c716baba7_79967328 (Smarty_Internal_Template $_smarty_tpl) {
?>



<div class="new-libro">

    <select type="text" name="filtrado-libros" id="filter-table" class="form-select w-30" aria-label="Default select example" >
        <option selected disabled>Elemento a filtrar</option>      
        <option name="filtroTitulo" value="nombre_libro">Titulo</option>
        <option value="id_categoria">Genero</option>
        <option name="filtroAutor" value="autor">Autor</option>
    </select>
    <form class="invisible flex" id="select-titulo"  action="search/titulo" method="POST">
        <input type="text" class="margin-right-10px" name="tituloIn" placeholder="Filtre por Titulo" required>
        <button type="submit"class="btn btn-secondary" id="btn-list-libro" ><i class="fas fa-search"></i></button>
    </form>
    <form class="invisible flex" id="select-autor" action="search/autor" method="POST">
        <input type="text" class="margin-right-10px" name="autorIn" placeholder="Filtre por Autor" required>
        <button type="submit"class="btn btn-secondary" id="btn-list-libro" ><i class="fas fa-search"></i></button>
    </form>
    <form  class="invisible flex" id="select-genero"  action="search/genero" method="POST">
        <input type="text" class="margin-right-10px" name="generoIn" placeholder="Filtre por Genero" required>
        <button type="submit"class="btn btn-secondary" id="btn-list-libro" ><i class="fas fa-search"></i></button>
    </form>  

           <?php if ((isset($_smarty_tpl->tpl_vars['email']->value)) && ($_smarty_tpl->tpl_vars['rol']->value == "1") || ($_smarty_tpl->tpl_vars['rol']->value == "2")) {?>
            <a  href="libros/agregar">
            <button class="btn btn-primary" id="btn-list-libro">Nuevo Libro</button> 
        </a>
    <?php }?>
</div> 
<?php }
}
