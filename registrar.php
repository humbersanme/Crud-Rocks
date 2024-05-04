<?php
include "conexion/conexion.php";
include "controlador/registrar-peli.php";
include "controlador/editar-peli.php";
include "controlador/eliminar-peli.php";
$sql = $conexion->query("SELECT * FROM rocas ORDER BY roca_id DESC");
?>
<?php include "header-login.php" ?>
<!-- Aqui comienza el search -->

<?php include "search.php"; ?>
</div>
<!-- Aqui termina el header y comienza el contenido -->
<h1 class="display-6 text-center p-3 text-warning">Editar Rocas</h1>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#subirImagen">
    Añadir Roca
</button>
<!-- Modal -->
<div class="modal fade container-fluid" id="subirImagen" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog container-fluid">
        <div class="modal-content container-fluid">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Subir roca</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body container-fluid">
                <form class="row g-3" action="" enctype="multipart/form-data" method="POST">
                    <div class="col-md-6">
                        <label for="roca" class="form-label">Roca</label>
                        <input type="text" name="roca" class="form-control" id="roca" aria-describedby="tituloHelp"
                            required>
                    </div>
                    <div class="col-md-6">
                        <label for="clasederoca" class="form-label">Clase de Roca</label>
                        <input type="text" class="form-control" name="clasederoca" id="clasederoca" required>
                    </div>
                    <div class="col-12">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="3"
                            required></textarea>
                    </div>
                    <div class="col-12">
                        <label for="dureza" class="form-label">Dureza</label>
                        <input type="text" class="form-control" name="dureza" required>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="composicion" class="form-label">Composición</label>
                        <input type="text" class="form-control" name="composicion" id="composicion" required>
                    </div>
                    <div class="col-md-4">
                        <label for="ambiente_formacion" class="form-label">Ambiente de formación</label>
                        <input type="text" class="form-control" name="ambiente_formacion" id="ambiente_formacion"
                            required>
                    </div>
                    <div class="col-md-4">
                        <label for="tipocemento" class="form-label">Tipo cemento</label>
                        <input type="text" class="form-control" id="tipocemento" name="tipocemento" required>
                    </div>
                    <div class="col-md-4">
                        <label for="color" class="form-label">Color</label>
                        <input type="text" class="form-control" id="color" name="color" required>
                    </div>
                    <div class="col-12">
                        <label for="imagen" class="form-label">Imagen</label>
                        <input type="file" class="form-control" name="imagen" id="imagen">
                    </div>
                    <div class="col-12">
                        <label for="video" class="form-label">Link Vídeo</label>
                        <input type="text" class="form-control" name="video" id="video">
                    </div>
                    <input type="submit" class="form-control btn btn-success mt-3" value="Registrar"
                        name="btnregistrar">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Tabla -->
<table class="table table-hover container-fluid p-3">
    <thead class="table-warning">
        <tr>
            <th scope="col">Imagen</th>
            <th scope="col">Descripción</th>
            <th scope="col">Roca</th>
            <th scope="col">Clase de Roca</th>
            <th scope="col">Textura</th>
            <th scope="col">Dureza</th>
            <th scope="col">Color</th>
            <th scope="col">Ambiente formación</th>
            <th scope="col">Tipo cemento</th>
            <th scope="col">Composición</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php while ($datos = $sql->fetch_object()) { ?>
        <tr class="table-secondary">

            <td>
                <img class="img-fluid rounded mx-auto" width="100%" src="<?= $datos->ruta ?>"
                    alt="<?= $datos->titulo ?>">
            </td>
            <td>
                <?= $datos->descripcion ?>
            </td>
            <td>
                <?= $datos->roca ?>
            </td>
            <td>
                <?= $datos->clasederoca ?>
            </td>
            <td>
                <?= $datos->textura ?>
            </td>
            <td>
                <?= $datos->dureza ?>
            </td>
            <td>
                <?= $datos->color ?>
            </td>
            <td>
                <?= $datos->ambiente_formacion ?>
            </td>
            <td>
                <?= $datos->tipocemento ?>
            </td>
            <td>
                <?= $datos->composicion ?>
            </td>
            <td>
                <!-- Botón Modal editar-->
                <a class="btn btn-warning" data-bs-toggle="modal"
                    data-bs-target="#editar_imagen<?= $datos->peli_id ?>">Editar</a>
                <!-- Botón borrar-->
                <a href="registrar.php?peli_id=<?= $datos->peli_id ?>&ruta=<?= $datos->ruta ?>" class="btn btn-danger"
                    onclick="return eliminar()">Borrar</a>
            </td>
        </tr>
        <!-- Modal editar-->
        <div class="modal fade" id="editar_imagen<?= $datos->peli_id ?>" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar roca</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="hidden" value="<?= $datos->peli_id ?>" name="id_peli">
                            <input type="hidden" value="<?= $datos->ruta ?>" name="ruta">
                            <input type="file" class="form-control" name="imagen">
                            <div class="mt-3">
                                <label class="form-label" for="descripcion">Descripción</label>
                                <textarea type="text" class="form-control" id="descripcion"
                                    aria-describedby="descripcionHelp"
                                    name="descripcion"><?= $datos->descripcion ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="titulo">Roca</label>
                                <input type="text" name="roca" class="form-control" id="roca"
                                    value="<?= $datos->roca ?>" aria-describedby="tituloHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="director">Clase de Roca</label>
                                <input type="text" name="clasederoca" class="form-control" id="clasederoca"
                                    value="<?= $datos->clasederoca ?>" aria-describedby="diectorHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="textura">Textura</label>
                                <input type="text" name="textura" class="form-control" id="textura"
                                    value="<?= $datos->textura ?>" aria-describedby="generoHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="dureza">Dureza</label>
                                <input type="text" name="dureza" class="form-control" id="dureza"
                                    value="<?= $datos->dureza ?>" aria-describedby="protagonistasHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="puntuacion">Color</label>
                                <input type="text" name="color" class="form-control" id="color"
                                    value="<?= $datos->color ?>" aria-describedby="puntuacionHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="ambiente_formacion">Ambiente de formación</label>
                                <input type="text" name="ambiente_formacion" class="form-control"
                                    id="ambiente_formacion" value="<?= $datos->ambiente_formacion ?>"
                                    aria-describedby="ambiente_formacionHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="tipocemento">Tipo cemento</label>
                                <input type="text" name="tipocemento" class="form-control" id="tipocemento"
                                    value="<?= $datos->tipocemento ?>" aria-describedby="tipocementoHelp">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="composicion">Composición</label>
                                <input type="text" name="composicion" class="form-control" id="composicion"
                                    value="<?= $datos->composicion ?>" aria-describedby="tituloHelp">
                            </div>
                            <div class="mb-3">
                                <label for="video" class="form-label">Link Vídeo</label>
                                <input type="text" class="form-control" name="video" id="video"
                                    value="<?= $datos->video ?>">
                            </div>
                            <input type="submit" class="form-control btn btn-warning mt-3" name="btnmodificar"
                                value="Editar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </tbody>
</table>

</div>

<script>
function eliminar() {
    let respuesta = confirm("¿Estas seguro que deseas eliminar la imagen?");
    return respuesta;
}
</script>
<script>
//Espera 3 segundos y oculta el mensaje
setTimeout(function() {
    var mensaje = document.getElementById('mensaje');
    mensaje.style.display = 'none';
}, 3000);
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
</body>

</html>