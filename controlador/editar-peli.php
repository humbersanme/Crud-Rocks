<?php

if (!empty($_POST["btnmodificar"])) {

    $id_peli = $_POST["roca_id"];
    $ruta = $_POST["ruta"];
    $imagen = $_FILES["imagen"]["tmp_name"];
    $nombreImagen = $_FILES["imagen"]["name"];
    $tipoImagen = strtolower(pathinfo($nombreImagen, PATHINFO_EXTENSION));
    $descripcion = $_POST["descripcion"];
    $roca = $_POST["roca"];
    $clasederoca = $_POST["clasederoca"];
    $textura = $_POST["textura"];
    $dureza = $_POST["dureza"];
    $color = $_POST["color"];
    $fechaLanzamiento = $_POST["ambiente_formacion"];
    $pais = $_POST["tipocemento"];
    $directorio = "img/";
    $video = $_POST["video"];

    if (is_file($imagen)) {

        if ($tipoImagen == "jpg" or $tipoImagen == "jpeg" or $tipoImagen == "png" or $tipoImagen == "webp") {
            // Borramos la imagen anterior
            unlink($ruta);
            // Almacenamos la imagen en la carpeta
            $nuevaRuta = $directorio . $id_peli . "-" . $nombreImagen;
            if (move_uploaded_file($imagen, $nuevaRuta)) {
                // Almacenamos la imagen en la base de datos
                $editar = $conexion->query("UPDATE rocas SET ruta='$nuevaRuta', descripcion='$descripcion', roca='$roca', clasederoca='$clasederoca', textura='$textura', 
                dureza='$dureza', color='$color', ambiente_formacion='$ambiente_formacion', composicion='$composicion', video='$video' WHERE peli_id=$id_peli");
                if ($editar == 1) {
                    echo "<div id='mensaje' class='alert alert-success'>Felicidades, película modificada con éxito</div>";
                } else {
                    echo "<div id='mensaje' class='alert alert-danger'>Error al modificar la película</div>";
                }
            } else {
                echo "<div id='mensaje' class='alert alert-danger'>Error al subir la película</div>";
            }
        } else {
            echo "<div id='mensaje' class='alert alert-danger'>Formato de imagen no válido</div>";
        }
    } else {
        // No se subió una nueva imagen, solo actualizar otros campos
        $editar = $conexion->query("UPDATE pelis SET descripcion='$descripcion', roca='$roca', clasederoca='$clasederoca', textura='$textura', 
        dureza='$dureza', color='$color', ambiente_formacion='$ambiente_formacion', composicion='$composicion', video='$video' WHERE peli_id=$id_peli");
        if ($editar == 1) {
            echo "<div id='mensaje' class='alert alert-success'>¡Película modificada con éxito!</div>";
        } else {
            echo "<div id='mensaje' class='alert alert-danger'>Error al modificar la película</div>";
        }
    }
}
?>

<!-- Para que no nos envíe otra vez el formulario cuando recargemos la página y tengamos un elemento duplicado -->
<script>
    history.replaceState(null, null, location.pathname);
</script>