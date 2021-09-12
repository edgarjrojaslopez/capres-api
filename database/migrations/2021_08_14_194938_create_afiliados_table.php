<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAfiliadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afiliados', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nombre');
            $table->integer('cedula');
            $table->string('correo', 50)->nullable();
            $table->string('unidad', 250)->nullable();
            $table->string('telf_oficina', 45)->nullable();
            $table->string('telf_habitacion', 45)->nullable();
            $table->string('region', 150)->nullable();
            $table->string('cargo', 100)->nullable();
            $table->string('grado', 100)->nullable();
            $table->string('sueldo', 45)->nullable();
            $table->string('banco', 250)->nullable();
            $table->string('cuenta', 20)->nullable();
            $table->string('porcentaje')->default(10);
            $table->tinyInteger('procesado')->default(1);
            $table->timestamp('fecha')->useCurrent();
            $table->tinyInteger('capres_procesado')->nullable()->default(0);
            $table->string('capres_user')->default(1);
            $table->timestamp('capres_fecha')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('afiliados');
    }
}
