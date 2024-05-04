<?php include "header.php" ?>
</div>
<!-- Aqui termina el header y comienza el contenido -->
<div class="container-fluid p-3">
    <!-- Aqui comienza el search -->
    <?php include "search.php"; ?>
    <!-- Aqui termina el search -->
    <h1 class="display-6 text-center p-3 text-warning">Top Pelis</h1>
    <!-- Este div modifica el número de cards por fila -->
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <?php
        $sql = $conexion->query("SELECT * FROM pelis ORDER BY puntuacion DESC");
        while ($datos = $sql->fetch_object()) { ?>
        <div class="col">
            <div class="card h-100">
                <a href="vista_individual.php?peli_id=<?= $datos->peli_id ?>">
                    <img src="<?= $datos->ruta ?>" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                    <h4 class="card-title text-primary">Título:
                        <?= $datos->titulo ?>
                    </h4>
                    <p class="card-text color-info h5">Puntuación: <b>
                            <?= $datos->puntuacion ?>
                        </b></p>
                    <p class="card-text">País:
                        <?= $datos->pais ?>
                    </p>
                    <a href="vista_individual.php?peli_id=<?= $datos->peli_id ?>" class="btn btn-primary">Detalles</a>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary">
                        <?= $datos->genero ?>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
</body>

</html>