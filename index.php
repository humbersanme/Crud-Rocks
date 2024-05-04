<?php
include "conexion/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de rocas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-image: url('img/igneo.jpg'); /* Reemplaza 'ruta_de_tu_imagen.jpg' con la ruta de tu imagen de fondo */
            background-size: cover;
            background-position: center;
        }
    </style>

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
                            <?php if (isset($_SESSION["loggedin"])) { ?>
                                    
                                 <?php } else { ?>
                                    <li><a href="userlogin.php" class="nav-link px-2">Iniciar Sesión</a></li>
                                <?php } ?>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" name="search" type="search" placeholder="Search"
                                aria-label="Search">
                            <button class="btn btn-outline-success" name="enviar" type="submit">Search</button>
                        </form>

                        <div class="col-md-3 text-end">
                            <a href="registrar.php" class="btn btn-outline-primary me-2">Editar Rocas</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </div>

    </div>
    <div class="container-fluid p-3">
        <!-- Aqui comienza el search -->


        <?php include "search.php"; ?>

        <!-- Aqui termina el header y comienza el contenido -->
        <h1 class="display-6 text-center p-3 text-warning">Rocas</h1>
        <!-- Este div modifica el número de cards por fila -->
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php
            $sql = $conexion->query("SELECT * FROM rocas ORDER BY roca_id DESC");
            while ($datos = $sql->fetch_object()) { ?>
                <div class="col">
                    <div class="card h-100">
                        <a href="vista_individual.php?peli_id=<?= $datos->roca_id ?>">
                            <img src="<?= $datos->ruta ?>" class="card-img-top" alt="<?= $datos->titulo ?>">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title text-primary">Roca:
                                <?= $datos->roca ?>
                            </h4>
                            <p class="card-text">Clase de Roca: <b>
                                    <?= $datos->clasederoca ?>
                                </b></p>
                            <p class="card-text">
                                <?= $datos->descripcion ?>
                            </p>
                            <a href="vista_individual.php?roca_id=<?= $datos->roca_id ?>"
                                class="btn btn-primary">Detalles</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">
                                <?= $datos->textura ?>
                            </small>
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>






    <!-- Aqui termina el contenido y comienza el footer -->
    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li><a href="index.php" class="nav-link px-2 link-secondary">Home</a></li>
                <li><a href="cartelera.php" class="nav-link px-2">Rocas</a></li>
            </ul>
            <p class="text-center text-body-secondary">&copy;Humberto 2023</p>
        </footer>
    </div>
    <!-- Aqui termina el footer y comienzan los scripts -->
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>