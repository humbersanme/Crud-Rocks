<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);
?>
<?php
if (!empty($_POST["btnregistrar"])) {
    // echo "<div class='alert alert-info'>Botón presionado</div>";

    $imagen = $_FILES["imagen"]["tmp_name"];
    $nombreImagen = $_FILES["imagen"]["name"];
    $tipoImagen = strtolower(pathinfo($nombreImagen, PATHINFO_EXTENSION));
    $descripcion = $_POST["descripcion"];
    $roca = $_POST["roca"];
    $clasederoca = $_POST["clasederoca"];
    $textura = $_POST["textura"];
    $dureza = $_POST["dureza"];
    $color = $_POST["color"];
    $ambiente_formacion = $_POST["ambiente_formacion"];
    $tipocemento = $_POST["tipocemento"];
    $composicion = $_POST["composicion"];
    $directorio = "img/";
    $video = $_POST["video"];

    if ($tipoImagen == "jpg" or $tipoImagen == "jpeg" or $tipoImagen == "png" or $tipoImagen == "webp") {
        $registro = $conexion->query("INSERT INTO rocas(ruta, descripcion, roca, clasederoca, textura, dureza, color, ambiente_formacion, tipocemento, composicion, video) VALUES 
        ('','$descripcion','$roca','$clasederoca','$textura','$dureza','$color','$ambiente_formacion','$tipocemento','$composicion','$video')");
        $idRegistro = $conexion->insert_id;
        //Aqui estamos añadiendo la ID al nombre de la imagen
        $ruta = $directorio . $idRegistro . "-" . $nombreImagen;
        $actualizarImagen = $conexion->query("UPDATE rocas SET ruta='$ruta' WHERE roca_id='$idRegistro'");
        if (move_uploaded_file($imagen, $ruta)) {
            echo "<div id='mensaje' class='alert alert-success'>Felicidades, película guardada con éxito</div>";
        }
    } else {
        echo "<div id='mensaje' class='alert alert-danger'>Formato de imagen no válido</div>";
    }

}
?>
<!-- Para que no nos envíe otra vez el formulario cuando recargemos la página y tengamos un elemento duplicado -->

<script>
    history.replaceState(null, null, location.pathname);
</script>