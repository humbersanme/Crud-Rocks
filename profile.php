<?php session_start();
// Verifica si el usuario ha iniciado sesión. Si no ha iniciado sesión, redirige a la página de inicio de sesión
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit;
}
// Verifica si hay un mensaje en la sesión
if (isset($_SESSION['mensaje'])) {
    // Muestra el mensaje
    echo '<div class="text-emphasis pt-3 px-2">' . $_SESSION['mensaje'] . '</div>';
    /* Limpia el mensaje de la sesión para que no se muestre nuevamente
    unset($_SESSION['mensaje']); */
}
include "header.php"; 
include "search.php"; 
include "conexion/conexion.php";



// Obtiene el nombre de usuario desde la sesión
$username = $_SESSION['name'];

// Prepara la consulta SQL para seleccionar los detalles del usuario desde la base de datos
$sql = $conexion->query("SELECT * FROM usuarios WHERE user_name = '$username'");

// Verifica si se obtuvieron resultados de la consulta
if ($sql->num_rows > 0) {
    // Muestra los detalles del usuario
    while ($datos = $sql->fetch_object()) {
        ?>
        <h1 class="display-6 text-center pb-3 mb-3 text-warning"><?= $datos->id_user ?></h1>
        <div class="container-fluid p-5 position-relative">
            <div class="card mb-3 rounded-start">
                <div class="card-body">
                    <h6 class="card-title text-primary">Nombre de Usuario:</h6>
                    <p class="card-text"><?= $datos->user_name ?></p>
                    <h6 class="card-title text-primary">Correo Electrónico:</h6>
                    <p class="card-text"><?= $datos->user_mail ?></p>
                    <!-- Puedes mostrar más detalles del usuario aquí si lo deseas -->
                </div>
            </div>
        </div>
    <?php
    }
} else {
    // No se encontraron resultados
    echo "No se encontraron detalles de usuario.";
}
?>
<!-- Aquí termina el contenido y comienza el footer -->
<?php include "footer.php"; ?>
