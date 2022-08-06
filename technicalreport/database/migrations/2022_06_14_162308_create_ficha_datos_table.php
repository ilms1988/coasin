<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_datos', function (Blueprint $table) {
            $table->id();
            $table->string('fecha');
            $table->string('usuario_afectado');
            $table->string('ubicacion_user_afectado');
            $table->string('n_incidente');
            $table->string('tipo_disposotivo');
            $table->string('marca_dipositivo');
            $table->string('tipo_disco');
            $table->string('tipo_memoria');
            $table->string('n_serial');
            $table->string('modelo_dispositivo');
            $table->string('tipo_procesador');
            $table->string('CAS');
            $table->string('mantecion_logica');
            $table->string('mantecion_fisica');
            $table->string('cambio_HDD');
            $table->string('descripcion_falla');
            $table->string('aumento_memoria');            
            $table->string('accion_inmediata');
            $table->string('diagnostico');
            $table->string('solucion_propuesta');
            $table->string('otros');
            $table->string('tecnico_terreno');
            $table->string('supervisor_cargo');
            $table->string('nombre_imag');
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
        Schema::dropIfExists('ficha_datos');
    }
};
