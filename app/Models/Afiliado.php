<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nombre
 * @property int $cedula
 * @property string $correo
 * @property string $unidad
 * @property string $telf_oficina
 * @property string $telf_habitacion
 * @property string $region
 * @property string $cargo
 * @property string $grado
 * @property string $sueldo
 * @property string $banco
 * @property string $cuenta
 * @property string $porcentaje
 * @property boolean $procesado
 * @property string $fecha
 * @property boolean $capres_procesado
 * @property string $capres_user
 * @property string $capres_fecha
 * @property string $created_at
 * @property string $updated_at
 */
class Afiliado extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'nombre', 
        'cedula', 
        'correo', 
        'unidad', 
        'telf_oficina', 
        'telf_habitacion', 
        'region', 
        'cargo', 
        'grado', 
        'sueldo', 
        'banco', 
        'cuenta', 
        'porcentaje', 
        'procesado', 
        'fecha', 
        'capres_procesado', 
        'capres_user', 
        'capres_fecha'];

    protected $hidden =[
        'capres_user',
        'capres_fecha'        
    ];

}
