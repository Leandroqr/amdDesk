<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSgiticketincidentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sgiticketincidentes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('useract_id')->nullable();
            $table->unsignedBigInteger('lugar_id')->nullable();
            $table->timestamp('incidente_at')->nullable();
            $table->unsignedBigInteger('estadoactual_id')->nullable();
            $table->unsignedBigInteger('tipo_id')->nullable();
            $table->longText('descripcion')->nullable();
            $table->integer('impacto')->default('0');
            $table->longText('descripcionimpacto')->nullable();
            $table->integer('vulnerabilidad')->default('0');
            $table->longText('descripcionvulnerabilidad')->nullable();
            $table->integer('causante')->default('0');
            $table->longText('nombrecausante')->nullable();
            $table->integer('violacion')->default('0');
            $table->unsignedBigInteger('activo_id')->nullable();
            $table->unsignedBigInteger('matriz_id')->nullable();
            $table->integer('evidencia')->default('0');
            $table->longText('evidenciaurl')->nullable();
            $table->unsignedBigInteger('seccion_id')->nullable();
            $table->unsignedBigInteger('asignacion')->nullable();
            $table->unsignedBigInteger('procesos')->nullable();
            $table->unsignedBigInteger('usuarios')->nullable();
            $table->unsignedBigInteger('recursos')->nullable();
            $table->unsignedBigInteger('urgencia')->nullable();
            $table->string('prioridad')->nullable();
            $table->integer('respuesta')->default('0');
            $table->timestamp('inicio_at')->nullable();
            $table->timestamp('fin_at')->nullable();
            $table->longText('acciones')->nullable();
            $table->longText('pendientes')->nullable();
            $table->unsignedBigInteger('estado_id')->default('1');
            $table->longText('lecciones')->nullable();
            $table->string('responsablesolucion')->nullable();
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
        Schema::dropIfExists('sgiticketincidentes');
    }
}
