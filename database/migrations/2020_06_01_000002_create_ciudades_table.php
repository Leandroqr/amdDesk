<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCiudadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table for storing ciudades
        Schema::create('ciudades', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('dvpola_id')->nullable();
            $table->string('dep_id')->nullable();
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
        Schema::drop('ciudades');
    }
}
