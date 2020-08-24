<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table for storing departamentos
        Schema::create('departamentos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('postal_id')->nullable();
            $table->unsignedBigInteger('pais_id')->nullable();
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
        Schema::drop('departamentos');
    }
}
