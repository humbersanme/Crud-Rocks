<?php
include "header.php"; 
?>
<?php include "search.php"; ?>
    <div class="container text-left bg-dark p-0">
         <div class="row p-3 mb-3 text-bg-info rounded-3"> 
        <div class="col" style="">
          <img class="img-fluid" src="img/conglomerado.jpeg" alt="login" style="width:100%; height: auto; object-fit: cover;">
        </div>
        <div class="col">
          <form class="" action="controlador/authenticate.php" method="POST" onsubmit="return validarEspaciosBlancos();">
            <h2 class="mt-4 mb-4 text-left dark">Login</h2>
            <div class="mb-4">
              <label for="user_name" class="form-label">Nombre</label>
              <input type="text" name="user_name" class="form-control" id="user_name">
            </div>
            <div class="mb-3">
              <label for="user_password" class="form-label">Password</label>
              <input type="password" class="form-control" name="user_password" placeholder="password" maxlength="8" required>
            </div>
            <?php
              if(isset($_GET["ooh"]) == 'true')
              {
                  echo "<div class='alert alert-danger' id='temporal'>Datos incorrectos. Por favor, verifica tu usuario y contraseña.</div>";
              }
            ?>
            <button type="submit" class="btn btn-primary" value="login" name="login">Iniciar sesión</button>
          </form>
            <!-- Enlace para redirigir al formulario de inicio de sesión -->
            <p class="mt-3 text-left dark">¿No tienes cuenta? <a href="registro.php" class="p-3 mb-3 text-primary rounded-3">Registrate aquí.</a></p>
      </div>
    </div>
    <script>
    // Selecciona el div con la clase "temporal"
    var divTemporal = document.getElementById('temporal');

    // Espera 3000 milisegundos (3 segundos) y luego cambia el estilo para hacer el div invisible
    setTimeout(function() {
        divTemporal.style.display = 'none';
    }, 5000);
      </script>
      <script>
        function validarEspaciosBlancos() {
        const username = document.getElementById('user_name').value;
        const password = document.getElementById('user_password').value;

        // Check if username or password contains whitespace characters
        if (username.includes(' ') || password.includes(' ')) {
            alert('El nombre y la contraseña no deben contener espacios en blanco.');
            return false; // Prevent form submission if whitespace is found
        }

        // Allow form submission if no whitespace is found
        return true;
        }

      <?php include "footer.php"; ?>