<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSgimatrizincidentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sgimatrizincidentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('categoria')->nullable();
            $table->integer('c')->default('0')->nullable();
            $table->integer('i')->default('0')->nullable();
            $table->integer('d')->default('0')->nullable();
            $table->longText('solucion')->nullable();
            $table->unsignedBigInteger('seccion_id')->nullable();
			$table->unsignedBigInteger('grupo_id')->nullable();
            $table->unsignedBigInteger('responsablen1')->nullable();
            $table->unsignedBigInteger('responsablen2')->nullable();
            $table->integer('evidencia')->default('0')->nullable();
            $table->integer('activo')->default('1')->nullable();
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
        Schema::dropIfExists('sgimatrizincidentes');
    }
}
