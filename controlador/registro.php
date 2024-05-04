<?php

// Verificamos si el formulario se ha enviado al presionar el botón de registro
if (isset($_POST['registro'])) {
    // Utilizamos require_once para llamar al archivo que contiene la conexión a la base de datos
    require_once '../conexion/conexion.php';

    // Obtenemos los valores del formulario
    $usuario = $_POST['user_name'];
    $password = $_POST['user_password'];
    $correo = $_POST['user_mail'];

    // Verificamos si alguno de los campos está vacío
    if (empty($usuario) || empty($password) || empty($correo)) {
        echo "Todos los campos son obligatorios. Por favor, llénelos.";
    } else {
        // Insertamos los datos en la base de datos
        $sql = "INSERT INTO usuarios (id_user, user_name, user_mail, user_password) VALUES (NULL, '$usuario', '$correo', '$password')";
        
        // Ejecutamos la consulta
        $resultado = mysqli_query($conexion, $sql);

        // Verificamos si la inserción fue exitosa
        if ($resultado) {
            // Mensaje si la inserción fue exitosa
           
            header('Location: ../userlogin.php?ole=true');
        } else {
            // Mensaje si ocurrió un error durante la inserción
            echo "No se puede insertar la información" . "<br>";
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        }
    }
}

?>



