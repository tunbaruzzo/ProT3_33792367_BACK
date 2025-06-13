<section class="py-5" style="background-image: url('<?= base_url('public/assets/img/fondo.contacto.png') ?>'); background-size: cover; background-position: center; color: white;">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Columna izquierda -->
      <div class="col-md-6 mb-4">
        <h1 class="fw-bold" style="color: white;">Contacto</h1>
        <ul class="list-unstyled mt-4 mb-4">
          <li><strong>Teléfono:</strong> (+54) 379-4464848</li>
          <li><strong>Sitio web:</strong> www.sitiotython.com</li>
          <li><strong>Email:</strong> contacto@sitiotython.com</li>
        </ul>
        <p class="mt-4">Completá el formulario y nos ponemos en contacto para darte información sobre nuestros servicios:</p>

        <!-- Formulario horizontal -->
        <form class="row g-2 mt-3">
          <div class="col-12 col-md-4">
            <input type="text" class="form-control" placeholder="Nombre completo" required>
          </div>
          <div class="col-12 col-md-4">
            <input type="text" class="form-control" placeholder="Nombre de la empresa" required>
          </div>
          <div class="col-12 col-md-4">
            <input type="email" class="form-control" placeholder="Mail corporativo" required>
          </div>
          <div class="col-12 text-end mt-2">
            <button type="submit" class="btn btn-outline-light">Enviar</button>
          </div>
        </form>
      </div>

      <!-- Columna derecha -->
      <div class="col-md-6 text-center">
        <img src="<?= base_url('public/assets/img/robot.contacto.png') ?>" alt="Robot contacto" class="img-fluid">
      </div>
    </div>
  </div>
</section>

