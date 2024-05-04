<?php
if (isset($_GET['enviar'])) {
    $search = $_GET['search'];
    $consulta = $conexion->query(" SELECT * FROM rocas  
                    WHERE roca LIKE '%$search%' OR dureza LIKE '%$search%' ");
    // Mostrar los resultados o realizar acciones con los resultados obtenidos
    // Por ejemplo: mostrar en una tabla, lista, etc.
    // Mostrar los resultados como tarjetas si se encontraron resultados
    if ($consulta->num_rows > 0) { ?>
        <h1 class="display-6 text-center p-3 text-warning">Resultados búsqueda</h1>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php while ($datos = $consulta->fetch_object()) { ?>
                <div class="col">
                    <div class="card h-100">
                        <a href="vista_individual.php?peli_id=<?= $datos->roca_id ?>">
                            <img src="<?= $datos->ruta ?>" class="card-img-top" alt="<?= $datos->roca ?>">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title text-primary">Roca:
                                <?= $datos->roca ?>
                            </h4>
                            <p class="card-text">Clase de roca: <b>
                                    <?= $datos->clasederoca ?>
                                </b></p>
                            <p class="card-text">Descripción: <b>
                                    <?= $datos->descripcion ?>
                            </p>
                            <a href="vista_individual.php?peli_id=<?= $datos->roca_id ?>" class="btn btn-primary">Detalles</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">
                                <?= $datos->textura ?>
                            </small>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } else {
        echo "<p class='text-center text-white'>No se encontraron resultados para la búsqueda.</p>";
    }

}
?>
<!-- Aqui termina el resultado del search -->