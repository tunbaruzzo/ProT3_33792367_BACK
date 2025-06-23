<div class="container mt-5">
    <h3 class="text-center mb-4">Iniciar sesión</h3>

    <!-- Mensaje de error -->
    <?php if (session()->getFlashdata('msg')): ?>
        <div class="alert alert-warning">
            <?= session()->getFlashdata('msg'); ?>
        </div>
    <?php endif; ?>

    <!-- Formulario de login -->
    <form method="post" action="<?= base_url('/enviarlogin') ?>">
        <div class="card-body" media="(max-width:768px)">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input name="email" type="text" class="form-control" placeholder="Correo">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Password</label>
                <input name="pass" type="password" class="form-control" placeholder="Contraseña">
            </div>

            <input type="submit" value="Ingresar" class="btn btn-success">
            <a href="<?= base_url('/') ?>" class="btn btn-danger">Cancelar</a>

            <br><span>¿Aún no se registró? 
                <a href="<?= base_url('/registro') ?>">Registrarse aquí</a>
            </span>
        </div>
    </form>
</div>
