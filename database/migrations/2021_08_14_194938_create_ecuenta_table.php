<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcuentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecuenta', function (Blueprint $table) {
            $table->char('cedula', 8);
            $table->char('nombre', 35);
            $table->char('grupo', 20);
            $table->char('zona', 20);
            $table->date('ingreso');
            $table->decimal('tot_habere', 11);
            $table->decimal('disponible', 11);
            $table->decimal('saldo_pre', 11);
            $table->decimal('saldo_fian', 11);
            $table->decimal('bloqueado', 11);
            $table->decimal('dispo_pres', 11);
            $table->decimal('dispo_reti', 11);
            $table->decimal('dispo_fian', 11);
            $table->date('fe_upres');
            $table->date('fe_ureti');
            $table->decimal('dispo_p1', 11);
            $table->decimal('dispo_p2', 11);
            $table->decimal('dispo_p3', 11);
            $table->decimal('dispo_p4', 11);
            $table->decimal('fianreq', 11);
            $table->char('clavepers', 4);
            $table->decimal('limcuotas', 11);
            $table->decimal('tretenc', 11);
            $table->decimal('maxmontor', 11);
            $table->decimal('saldo_apo', 11);
            $table->decimal('saldo_aho', 11);
            $table->decimal('saldo_avo', 11);
            $table->decimal('reserva', 11);
            $table->date('proxret');
            $table->char('uretpag', 4);
            $table->char('uapopag', 4);
            $table->decimal('retencxc', 11);
            $table->decimal('faltapa50', 11);
            $table->decimal('pctcancel', 5);
            $table->date('fecproxret');
            $table->decimal('avales', 11);
            $table->decimal('saldo_apoc', 11);
            $table->decimal('saldo_ahoc', 11);
            $table->decimal('saldo_avoc', 11);
            $table->decimal('saldo_apor', 11);
            $table->decimal('saldo_ahor', 11);
            $table->decimal('saldo_avor', 11);
            $table->decimal('saldo_ahox', 11);
            $table->decimal('saldo_avox', 11);
            $table->decimal('dispo_retv', 11);
            $table->decimal('planvivi', 11);
            $table->decimal('saldo_preg', 11);
            $table->decimal('saldo_div', 11);
            $table->decimal('rxc_bloq', 11);
            $table->decimal('s_cuo_xp', 11);
            $table->integer('frecnom');
            $table->char('nomina', 4);
            $table->decimal('rxc_afav', 11);
            $table->decimal('s_cre_di', 11);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecuenta');
    }
}
