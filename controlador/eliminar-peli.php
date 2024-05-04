<?php

if (!empty($_GET["roca_id"]) and !empty($_GET["ruta"])) {
    // echo "<div class='alert alert-info'>Botón presionado</div>";

    $id_peli = $_GET["roca_id"];
    $ruta = $_GET["ruta"];
    // Borramos la imagen de la carpteta
    unlink($ruta);
    // Borramos la imagen de la base de datos
    $eliminar = $conexion->query("DELETE FROM rocas WHERE roca_id = $roca_id");
    if ($eliminar == 1) {
        echo "<div id='mensaje' class='alert alert-success'>Película borrada con éxito</div>";
    } else {
        echo "<div id='mensaje' class='alert alert-danger'>Error al borrar la película</div>";
    }

    ?>
    <!-- Para que no nos envíe otra vez el formulario cuando recargemos la página y tengamos un elemento duplicado -->
 
    <?php
}
?>
<script>
    history.replaceState(null, null, location.pathname);
</script>