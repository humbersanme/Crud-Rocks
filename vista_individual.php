<?php include "header.php" ?>
<!-- Aqui termina el header y comienza el contenido -->
<!-- Aqui comienza el search -->
<?php include "search.php"; ?>
<!-- Aqui termina el search -->
<?php
include "conexion/conexion.php";
/* isset sirve para comprobar si una variable existe y tiene valor */
if (isset($_GET['roca_id'])) {
    $roca_id = $_GET['roca_id'];
    $sql = $conexion->query("SELECT * FROM rocas WHERE roca_id = $roca_id");
    ?>
    <?php while ($datos = $sql->fetch_object()) {
        $video_link = str_replace('watch?v=', 'embed/', $datos->video);
        ?>
        <h1 class="display-6 text-center pb-3 mb-3 text-warning">
            <?= $datos->roca ?>
        </h1>
        <div class="container-fluid p-5 position-relative"
            style="background-image: url('<?= $datos->ruta ?>'); position: relative; background-position: center; background-size: cover;">
            <div class="position-absolute w-100 h-100" style="background-color: rgba(233, 102, 86, 0.3); top: 0; left: 0;">
            </div>
            <div class="card mb-3 rounded-start" style="">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= $datos->ruta ?>" class="img-fluid rounded-start" alt="<?= $datos->roca ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h6 class="card-title text-primary">Clase de Roca:</h6>
                            <p class="card-text">
                                <?= $datos->clasederoca ?>
                            </p>
                            <h6 class="card-title text-primary">Descripción:</h6>
                            <p class="card-text">
                                <?= $datos->descripcion ?>
                            </p>
                            <h6 class="card-title text-primary">Dureza:</h6>
                            <p class="card-text">
                                <?= $datos->dureza ?>
                            </p>
                            <h6 class="card-title text-primary">Textura:</h6>
                            <p class="card-text">
                                <?= $datos->textura ?>
                            </p>
                            <h6 class="card-title text-primary">Composición:</h6>
                            <p class="card-text">
                                <?= $datos->composicion ?>
                            </p>
                            <h6 class="card-title text-primary">Ambiente formación:</h6>
                            <p class="card-text">
                                <?= $datos->ambiente_formacion ?>
                            </p>
                            <!-- Aquí se añade el reproductor de video de YouTube con el enlace modificado -->
                            <div class="video-container p-3">
                                <h6 class="card-title text-primary">Video:</h6>
                                <iframe width="100%" height="400" src="<?= $video_link ?>" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        <?php }
}
?>
</div>
<?php "search.php"; ?>
<!-- Aqui termina el contenido y comienza el footer -->
<div class="container">
    <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li><a href="index.php" class="nav-link px-2 link-secondary">Home</a></li>
                <li><a href="cartelera.php" class="nav-link px-2">Rocas</a></li>
    </ul>
        <p class="text-center text-body-secondary">&copy; 2023 Humberto Sánchez, Inc</p>
    </footer>
</div>
<!-- Aqui termina el footer y comienzan los scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>