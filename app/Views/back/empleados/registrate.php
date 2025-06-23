<div class="container mt-5">
  <div class="card-header text-center">
    <h4>Registrarse</h4>
  </div>

  <?php $validation = \Config\Services::validation(); ?>

  <form method="post" action="<?= base_url('/formValidation') ?>">
    <?= csrf_field(); ?>

    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
      <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
    <?php endif; ?>

    <?php if (!empty(session()->getFlashdata('success'))) : ?>
      <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
    <?php endif; ?>

    <div class="card-body">
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre completo</label>
        <input type="text" name="nombre_completo" class="form-control" placeholder="Nombre completo" value="<?= set_value('nombre_completo') ?>">
        <?php if ($validation->getError('nombre_completo')) : ?>
          <div class="alert alert-danger mt-2"><?= $validation->getError('nombre_completo') ?></div>
        <?php endif; ?>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" name="email" class="form-control" placeholder="Email" value="<?= set_value('email') ?>">
        <?php if ($validation->getError('email')) : ?>
          <div class="alert alert-danger mt-2"><?= $validation->getError('email') ?></div>
        <?php endif; ?>
      </div>

      <div class="mb-3">
        <label for="usuario" class="form-label">Usuario</label>
        <input type="text" name="usuario" class="form-control" placeholder="Usuario" value="<?= set_value('usuario') ?>">
        <?php if ($validation->getError('usuario')) : ?>
          <div class="alert alert-danger mt-2"><?= $validation->getError('usuario') ?></div>
        <?php endif; ?>
      </div>

      <div class="mb-3">
        <label for="pass" class="form-label">Contraseña</label>
        <input type="password" name="password" class="form-control" placeholder="Contraseña">
        <?php if ($validation->getError('password')) : ?>
          <div class="alert alert-danger mt-2"><?= $validation->getError('password') ?></div>
        <?php endif; ?>
      </div>

      <button type="submit" class="btn btn-primary">Registrarse</button>
    </div>
  </form>
</div>
