<!--Login-->
<section class="login-section" style="background-image: url('public/assets/img/fondo.sesion.png'); background-size: cover; background-position: center; min-height: 100vh; display: flex; align-items: center; padding: 2rem;">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      
      <!-- Columna izquierda: formulario -->
      <div class="col-md-6 d-flex justify-content-center">
        <div class="form-container login-form">
          <h2 class="mb-4 text-white">Iniciar Sesión</h2>
          <form>
            <div class="mb-3">
              <label for="email" class="form-label text-white">Correo electrónico</label>
              <input type="email" class="form-control" id="email" placeholder="ejemplo@correo.com" required />
            </div>
            <div class="mb-3">
              <label for="password" class="form-label text-white">Contraseña</label>
              <input type="password" class="form-control" id="password" placeholder="********" required />
            </div>
            <button type="submit" class="btn btn-cv w-100">Ingresar</button>
          </form>
        </div>
      </div>

      <!-- Columna derecha: imagen -->
      <div class="col-md-6 d-flex flex-column align-items-center justify-content-center text-center">
          <img src="public/assets/img/robot.sesion.png" alt="Robot" class="img-fluid" style="max-height: 80%;" />
      </div>
  </div>
</section>


<!--Fin de Login-->