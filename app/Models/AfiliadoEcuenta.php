<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $cedula
 * @property string $nombre
 * @property string $grupo
 * @property string $zona
 * @property string $ingreso
 * @property float $tot_habere
 * @property float $disponible
 * @property float $saldo_pre
 * @property float $saldo_fian
 * @property float $bloqueado
 * @property float $dispo_pres
 * @property float $dispo_reti
 * @property float $dispo_fian
 * @property string $fe_upres
 * @property string $fe_ureti
 * @property float $dispo_p1
 * @property float $dispo_p2
 * @property float $dispo_p3
 * @property float $dispo_p4
 * @property float $fianreq
 * @property string $clavepers
 * @property float $limcuotas
 * @property float $tretenc
 * @property float $maxmontor
 * @property float $saldo_apo
 * @property float $saldo_aho
 * @property float $saldo_avo
 * @property float $reserva
 * @property string $proxret
 * @property string $uretpag
 * @property string $uapopag
 * @property float $retencxc
 * @property float $faltapa50
 * @property float $pctcancel
 * @property string $fecproxret
 * @property float $avales
 * @property float $saldo_apoc
 * @property float $saldo_ahoc
 * @property float $saldo_avoc
 * @property float $saldo_apor
 * @property float $saldo_ahor
 * @property float $saldo_avor
 * @property float $saldo_ahox
 * @property float $saldo_avox
 * @property float $dispo_retv
 * @property float $planvivi
 * @property float $saldo_preg
 * @property float $saldo_div
 * @property float $rxc_bloq
 * @property float $s_cuo_xp
 * @property int $frecnom
 * @property string $nomina
 * @property float $rxc_afav
 * @property float $s_cre_di
 */
class AfiliadoEcuenta extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ecuenta';

    /**
     * @var array
     */
    protected $fillable = ['cedula', 'nombre', 'grupo', 'zona', 'ingreso', 'tot_habere', 'disponible', 'saldo_pre', 'saldo_fian', 'bloqueado', 'dispo_pres', 'dispo_reti', 'dispo_fian', 'fe_upres', 'fe_ureti', 'dispo_p1', 'dispo_p2', 'dispo_p3', 'dispo_p4', 'fianreq', 'clavepers', 'limcuotas', 'tretenc', 'maxmontor', 'saldo_apo', 'saldo_aho', 'saldo_avo', 'reserva', 'proxret', 'uretpag', 'uapopag', 'retencxc', 'faltapa50', 'pctcancel', 'fecproxret', 'avales', 'saldo_apoc', 'saldo_ahoc', 'saldo_avoc', 'saldo_apor', 'saldo_ahor', 'saldo_avor', 'saldo_ahox', 'saldo_avox', 'dispo_retv', 'planvivi', 'saldo_preg', 'saldo_div', 'rxc_bloq', 's_cuo_xp', 'frecnom', 'nomina', 'rxc_afav', 's_cre_di'];

}
