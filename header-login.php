<?php
include "conexion/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis pelis favoritas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    
        <script src="assets/js/color-modes.js"></script>

    </head>

<body class="bg-dark">
    <!--Aqui comienza el header-->
    <div class="container">
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li><a href="index.php" class="nav-link px-2 link-secondary">Home</a></li>
                            <li><a href="cartelera.php" class="nav-link px-2">Rocas</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Tipos de roca
                                </a>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="vista_sedimentaria.php">Sedimentarias</a></li>
                                <li><a class="dropdown-item" href="vista_metamorfica.php">Metamórficas</a></li>
                                <li><a class="dropdown-item" href="vista_ignea.php">Ígneas</a></li>

                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" name="search" type="search" placeholder="Search"
                                aria-label="Search">
                            <button class="btn btn-outline-success" name="enviar" type="submit">Search</button>
                        </form>

                        <div class="col-md-3 text-end">
                            <a href="index.php" class="btn btn-outline-primary me-2">Salir</a>
                        </div>
                    </div>
                </div>
            </nav>




        </header>