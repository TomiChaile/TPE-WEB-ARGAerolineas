<?php
/* Smarty version 4.2.1, created on 2022-11-13 23:48:45
  from 'C:\xampp2\htdocs\tpe\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6371744d376fc2_93708494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ac0cabdfdc317b890ea274d7eb71e36e874dcd3' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\tpe\\templates\\header.tpl',
      1 => 1668379720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6371744d376fc2_93708494 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>ARG Aerolineas</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="home">ARG Aerolineas</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav d-flex">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="home">Home</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="pasajes">Pasajes</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="list">Reserva</a>
                    </li>
                  <?php if (!(isset($_SESSION['email']))) {?>
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="registrarse">Registrarse</a>
                    </li>
                 <?php } else { ?>
                    <li class="nav-item ml-auto">
                      <a class="nav-link" aria-current="page" href="logout">Logout</a>
                    </li>
                  <?php }?>
                </ul>
              </div>
            </div>
          </nav>
    </header>

    <!-- inicio main container -->
    <main class="container">
<?php }
}
