<?php
include "header.php"; 
include "search.php"; 
?>
    <div class="row p-3 mb-3 text-bg-info rounded-3"> 
        <div class="col" style="">
          <img class="img-fluid" src="img/cuarcita.jpeg" alt="login" style="width:100%; height: auto; object-fit: cover;">
        </div>
        <div class="col">
        <form action="controlador/registro.php" method="POST" onsubmit="return validarEspaciosBlancos();">            
        <h2 class="mt-5 mb-4">Registrate</h2>
            <div class="mb-3">
              <label for="user_name" class="form-label">Nombre</label>
              <input type="text" name ="user_name" class="form-control" id="user_name" aria-describedby="nameHelp" required>
            </div>
            <div class="mb-3">
                <label for="user_mail" class="form-label">Email</label>
                <input type="email" name="user_mail" class="form-control" id="user_mail" aria-describedby="emailHelp" required>
              </div>
            <div class="mb-3">
              <label for="user_password" class="form-label">Password</label>
              <input type="password" class="form-control" name="user_password" id="user_password" placeholder="password" minlength="4" maxlength="8" required>
              <div id="passwordHelpBlock" class="form-text">
                El password debe contener de 4 a 8 caracteres              
            </div>
            </div>
            <button type="submit" class="btn btn-primary" name="registro">Registrate</button>
          </form>
            <!-- Enlace para redirigir al formulario de inicio de sesión -->
            <p class="mt-3">¿Ya tienes una cuenta? <a href="userlogin.php" class="p-3 mb-3 text-primary rounded-3">Inicia sesión aquí.</a></p>
            </div>
      </div>

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
    </script>
<?php include "footer.php"; ?>