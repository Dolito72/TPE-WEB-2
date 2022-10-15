<?php
/* Smarty version 4.2.1, created on 2022-10-15 19:04:30
  from 'C:\xampp\htdocs\web\tpe\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634ae81e66f334_41554134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2859a8db557f63345b0da05ff4bda5985f25155f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpe\\templates\\header.tpl',
      1 => 1665853433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634ae81e66f334_41554134 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>tpe</title>
</head>

<body>
<header class="mx-auto w-80 p-3">
<!-- <img src=".//images/scram.jpg" class="w-80 " alt="moto" />-->
    <nav class=" navbar navbar-expand-lg bg-light  Regular shadow ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="home"> <img src=".//images/logo2.png" alt="Royal Enfield" width="80"
                            height="50">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="products">Productos</a>
                            </li>
                            <?php if ((isset($_SESSION['USER_ID']))) {?>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="add/product">Agregar Producto</a>
                                </li>
                            <?php }?>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="products/specification">Productos por
                                    especificación</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="specifications">Especificaciones</a>
                            </li>
                            <?php if ((isset($_SESSION['USER_ID']))) {?>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="add/specification">Agregar
                                        Especificación</a>
                                </li>
                            <?php }?>
                            <?php if (!(isset($_SESSION['USER_ID']))) {?>
                                <li class="nav-item">
                                  <a class="nav-link" aria-current="page" href="login">Login</a>
                                </li>
                            <?php } else { ?> 
                                <li class="nav-item ml-auto">
                                  <a class="nav-link" aria-current="page" href="logout">Logout (<?php echo $_SESSION['USER_EMAIL'];?>
)</a>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </nav>
    </header>

    <!-- inicio main container     -->
<main class="container"><?php }
}
