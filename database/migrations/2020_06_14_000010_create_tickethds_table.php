<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatetickethdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table for storing tickethds
        Schema::create('tickethds', function (Blueprint $table) {
            $table->id();
            $table->integer('order')->default(1);
            $table->unsignedBigInteger('user_id');
            $table->string('ticket_id')->nullable();
            $table->unsignedBigInteger('modeloatencion_id')->nullable();
            $table->unsignedBigInteger('cliente_id')->nullable();
            $table->unsignedBigInteger('aplicacion_id')->nullable();
            $table->unsignedBigInteger('matrizop_id')->nullable();
            $table->string('sistema_id')->nullable();
            $table->string('adjuntos')->nullable();
            $table->string('solicitante_nombre')->nullable();
            $table->string('solicitante_codigo')->nullable();
            $table->string('solicitante_cargo')->nullable();
            $table->string('solicitante_canal')->nullable();
            $table->string('solicitante_celular')->nullable();
            $table->string('solicitante_correo')->nullable();
            $table->string('solicitante_placa_zona')->nullable();
            $table->string('solicitante_doc_transporte')->nullable();
            $table->longText('descripcion')->nullable();
            $table->longText('observaciones')->nullable();
            $table->longText('solucion')->nullable();
            $table->unsignedBigInteger('seccion_id')->nullable();
            $table->unsignedBigInteger('grupo_id')->nullable();
            $table->unsignedBigInteger('asignacion_n1')->nullable();
            $table->unsignedBigInteger('asignacion_n2')->nullable();
            $table->unsignedBigInteger('asignacion_n3')->nullable();
            $table->unsignedBigInteger('asignacion_n4')->nullable();
            $table->longText('transferencia')->nullable();
            $table->unsignedBigInteger('estado_id')->default('1');
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();
            $table->softDeletes();



            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('modeloatencion_id')->references('id')->on('modeloatencion');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('aplicacion_id')->references('id')->on('aplicaciones');
            $table->foreign('matrizop_id')->references('id')->on('matrizops');
            $table->foreign('seccion_id')->references('id')->on('secciones');
            $table->foreign('grupo_id')->references('id')->on('grupos');
            $table->foreign('asignacion_n1')->references('id')->on('users');
            $table->foreign('asignacion_n2')->references('id')->on('users');
            $table->foreign('asignacion_n3')->references('id')->on('users');
            $table->foreign('asignacion_n4')->references('id')->on('users');
            $table->foreign('estado_id')->references('id')->on('estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tickethds');
    }
}
