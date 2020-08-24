<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatematrizopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table for storing matrizops
        Schema::create('matrizops', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion')->nullable();
            $table->string('categorizacion_T1')->nullable();
            $table->string('categorizacion_T2')->nullable();
            $table->string('categorizacion_T3')->nullable();
            $table->string('tipo_ticket')->nullable();
            $table->integer('prioridad')->nullable();
            $table->text('observaciones')->nullable();
            $table->integer('estado')->default('1');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('matrizops');
    }
}
