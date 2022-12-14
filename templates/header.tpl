<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{BASE_URL}">
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
        <nav class=" navbar navbar-expand-lg bg-light  Regular shadow ">
            <div class="container-fluid">
                <a class="navbar-brand" href="home"> <img src=".//images/logo2.png" alt="Royal Enfield" width="80" height="50">
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
                        {if isset($smarty.session.USER_ID)}
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="add/product">Agregar Producto</a>
                            </li>
                        {/if}
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="products/specification">Productos por
                                especificación</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="specifications">Especificaciones</a>
                        </li>
                        {if isset($smarty.session.USER_ID)}
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="add/specification">Agregar
                                    Especificación</a>
                            </li>
                        {/if}
                        {if !isset($smarty.session.USER_ID)}
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="login">Login</a>
                            </li>
                        {else}
                            <li class="nav-item ml-auto">
                                <a class="nav-link" aria-current="page" href="logout">Logout
                                    ({$smarty.session.USER_EMAIL})</a>
                            </li>
                        {/if}
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- inicio main container     -->
<main class="container">