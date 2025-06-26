<div class="container mt-5">
  <div class="card-header text-center">
    <h4>Registrarse</h4>
  </div>

  <?php if (session()->getFlashdata('success')) : ?>
      <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
  <?php endif; ?>

  <?php $validation = \Config\Services::validation(); ?>

  <form method="post" action="<?= base_url('/formValidation') ?>">
    <div class="form-group">
      <label>Nombre completo</label>
      <input type="text" name="nombre_completo" class="form-control" value="<?= set_value('nombre_completo') ?>">
      <?= $validation->getError('nombre_completo') ?>
    </div>

    <div class="form-group">
      <label>Email</label>
      <input type="text" name="email" class="form-control" value="<?= set_value('email') ?>">
      <?= $validation->getError('email') ?>
    </div>

    <div class="form-group">
      <label>Usuario</label>
      <input type="text" name="usuario" class="form-control" value="<?= set_value('usuario') ?>">
      <?= $validation->getError('usuario') ?>
    </div>

    <div class="form-group">
      <label>Contraseña</label>
      <input type="password" name="password" class="form-control">
      <?= $validation->getError('password') ?>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Registrarse</button>
  </form>
</div>
