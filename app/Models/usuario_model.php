<?php
namespace App\Models;
use CodeIgniter\Model;

class usuario_model extends Model
{
    protected $table = 'empleados';
    protected $primaryKey = 'id_empleado';
    protected $allowedFields = ['nombre_completo', 'email', 'usuario', 'password', 'area_id', 'rol_id', 'fecha_ingreso', 'perfil_id', 'baja', 'created_at'];   
}
