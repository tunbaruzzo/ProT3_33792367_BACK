<!--navegacion-->
<nav class="navbar navbar-expand-lg" style="background-color: #2b233c;">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url('principal') ?>">
      <img src="<?= base_url('public/assets/img/logo_pequeno.png') ?>" alt="Logo Tython" style="height: 40px;" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white" href="<?= base_url('servicios') ?>">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?= base_url('nosotros') ?>">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?= base_url('contacto') ?>">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?= base_url('registrate') ?>">Registrate</a>
        </li>
          <?php if (session()->get('perfil_id') == 1): ?>
            <li class="nav-item">
              <a class="nav-link text-white" href="<?= base_url('empleados') ?>">Empleados</a>
            </li>
          <?php endif; ?>
      </ul>

      <?php if (session()->get('logged_in')): ?>
        <span class="navbar-text text-white me-2">
          ¡Hola, <?= esc(session()->get('nombre_completo')) ?>!
        </span>
        <a href="<?= base_url('logout') ?>" class="btn btn-outline-light">Cerrar sesión</a>
      <?php else: ?>
        <a href="<?= base_url('login') ?>" class="btn btn-outline-light">Iniciar sesión</a>
      <?php endif; ?>
    </div>
  </div>
</nav>
<!--fin de navegacion-->
