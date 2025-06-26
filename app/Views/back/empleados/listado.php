<div class="container mt-5">
    <h2 class="mb-4">Lista de empleados</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre completo</th>
                <th>Email</th>
                <th>Usuario</th>
                <th>Perfil</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($empleados as $emp): ?>
                <tr>
                    <td><?= esc($emp['id_empleado']) ?></td>
                    <td><?= esc($emp['nombre_completo']) ?></td>
                    <td><?= esc($emp['email']) ?></td>
                    <td><?= esc($emp['usuario']) ?></td>
                    <td><?= esc($emp['perfil_id']) ?></td>
                    <td>
                        <a href="<?= base_url('empleados/editar/' . $emp['id_empleado']) ?>" class="btn btn-sm btn-warning">Editar</a>
                        <a href="<?= base_url('empleados/eliminar/' . $emp['id_empleado']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás segura que querés eliminar este empleado?')">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
