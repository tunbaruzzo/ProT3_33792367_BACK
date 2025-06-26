<?php

namespace App\Models;

use CodeIgniter\Model;

class empleado_model extends Model
{
    protected $table      = 'empleados';
    protected $primaryKey = 'id_empleado';

    protected $allowedFields = [
        'nombre_completo',
        'email',
        'usuario',
        'password',
        'perfil_id',
        'fecha_ingreso',
        // Cuando necesite agrego estooooos...
        // 'area_id',
        // 'rol_id',
        // 'baja'
    ];

    protected $useTimestamps = false;
}
