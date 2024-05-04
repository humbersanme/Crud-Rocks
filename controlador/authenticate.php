<?php
// Inicia la sesión para comenzar a utilizar variables de sesión
session_start();
// Incluye el archivo de conexión a la base de datos
require_once '../conexion/conexion.php';

// Verifica si se han enviado los datos del formulario de inicio de sesión
if (!isset($_POST['user_name'], $_POST['user_password'])) {
    // Si no se han enviado los datos, redirige al usuario a la página de inicio de sesión con un indicador de error
    header('Location: ../userlogin.php?ooh=true');
    exit;
}

// Verifica si el formulario ha sido enviado con el botón de inicio de sesión
if (isset($_POST['login'])) {
    // Obtiene los valores de usuario y contraseña del formulario
    $usuario = $_POST['user_name'];
    $password = $_POST['user_password'];

    // Consulta SQL para buscar el usuario en la base de datos
    $sql = "SELECT id_user, user_password FROM usuarios WHERE user_name = '$usuario'";
    $resultado = mysqli_query($conexion, $sql);

    // Verifica si la consulta fue exitosa
    if ($resultado) {
        // Obtiene la fila de resultados de la consulta
        $fila = mysqli_fetch_assoc($resultado);

        // Verifica si se encontró una fila correspondiente al nombre de usuario proporcionado
        if ($fila) {
            // Verifica si la contraseña proporcionada coincide con la contraseña almacenada de forma segura en la base de datos
/*             if (password_verify($password, $fila['user_password'])) { */
                // Regenera el ID de sesión para mejorar la seguridad
                session_regenerate_id();
                // Establece la variable de sesión 'loggedin' como TRUE para indicar que el usuario ha iniciado sesión
                $_SESSION['loggedin'] = TRUE;
                // Almacena el nombre de usuario proporcionado en el formulario de inicio de sesión en la variable de sesión 'name'
                $_SESSION['name'] = $usuario;
                // Almacena el ID de usuario recuperado de la base de datos en la variable de sesión 'id'
                $_SESSION['id'] = $fila['id_user'];
                // Crea un mensaje de bienvenida personalizado que incluye el nombre del usuario
                $_SESSION['mensaje'] = '¡Bienvenido, ' . $_SESSION['name'] . '! Has iniciado sesión con éxito.';
                // Redirige al usuario a la página de perfil
                header('Location: ../profile.php');
                exit;
            } else {
                // Si la contraseña no coincide, redirige al usuario a la página de inicio de sesión con un indicador de error
                header('Location: ../userlogin.php?ooh=true');
                exit;
            }
     /*    } else {
            // Si no se encontró un usuario correspondiente al nombre de usuario proporcionado, redirige al usuario a la página de inicio de sesión con un indicador de error
            header('Location: ../userlogin.php?ooh=true');
            exit;
        } */
    } else {
        // Si hubo un error en la consulta, muestra el mensaje de error
        echo "Error al realizar la consulta: " . mysqli_error($conexion);
        exit;
    }
}
?>
