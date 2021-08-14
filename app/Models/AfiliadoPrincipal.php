<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $cedula
 * @property string $nombre
 * @property string $telefono
 * @property float $ahorro_socio
 * @property float $ahorro_patrono
 * @property float $aporte_voluntario
 * @property string $cta_bancaria
 * @property string $f_ingreso
 * @property float $monto_retiro
 * @property int $porcentaje
 * @property float $deuda_prestamo
 * @property string $f_prestamo
 * @property float $monto_prestamo
 * @property string $f_retiro_haberes
 * @property string $f_disp_retiro_haberes
 * @property float $total_haberes
 * @property float $fiadores
 * @property string $ubicacion_administrativa
 * @property float $reserva
 * @property float $ret_cobrar
 * @property string $estatus
 * @property float $dividendos
 */
class AfiliadoPrincipal extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'afiliados_principal';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'cedula';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['nombre', 'telefono', 'ahorro_socio', 'ahorro_patrono', 'aporte_voluntario', 'cta_bancaria', 'f_ingreso', 'monto_retiro', 'porcentaje', 'deuda_prestamo', 'f_prestamo', 'monto_prestamo', 'f_retiro_haberes', 'f_disp_retiro_haberes', 'total_haberes', 'fiadores', 'ubicacion_administrativa', 'reserva', 'ret_cobrar', 'estatus', 'dividendos'];

}
