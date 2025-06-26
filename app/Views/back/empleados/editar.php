<div class="container mt-5">
    <h2>Editar Empleado</h2>

    <form method="post" action="<?= base_url('empleados/actualizar/' . $empleado['id_empleado']) ?>">
        <div class="mb-3">
            <label for="nombre_completo" class="form-label">Nombre completo</label>
            <input type="text" name="nombre_completo" class="form-control" value="<?= esc($empleado['nombre_completo']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" name="email" class="form-control" value="<?= esc($empleado['email']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="usuario" class="form-label">Usuario</label>
            <input type="text" name="usuario" class="form-control" value="<?= esc($empleado['usuario']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="perfil_id" class="form-label">Perfil</label>
            <select name="perfil_id" class="form-control">
                <option value="1" <?= $empleado['perfil_id'] == 1 ? 'selected' : '' ?>>Administrador</option>
                <option value="2" <?= $empleado['perfil_id'] == 2 ? 'selected' : '' ?>>Empleado</option>
                <option value="3" <?= $empleado['perfil_id'] == 3 ? 'selected' : '' ?>>Empresa</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
