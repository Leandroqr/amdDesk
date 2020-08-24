<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSgiactivoincidentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sgiactivoincidentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('categoria')->nullable();
            $table->string('custodio')->nullable();
            $table->string('propietario')->nullable();
            $table->string('valor')->nullable();
            $table->integer('c')->nullable();
            $table->integer('i')->nullable();
            $table->integer('d')->nullable();
            $table->decimal('ponderado')->nullable();
            $table->string('clasificacion')->nullable();
            $table->longText('amenazas')->nullable();
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
        Schema::dropIfExists('sgiactivoincidentes');
    }
}
