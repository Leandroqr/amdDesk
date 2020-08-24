<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table for storing customers
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('nit_id');
            $table->string('nit');
            $table->string('dv')->nullable();
            $table->string('nombre1',50)->nullable();
            $table->string('nombre2',50)->nullable();
            $table->string('apellido1',50)->nullable();
            $table->string('apellido2',50)->nullable();
            $table->string('name', 100);
            $table->string('razon_social',100);
            $table->unsignedBigInteger('pais_id')->nullable();
            $table->unsignedBigInteger('departamento_id')->nullable();
            $table->unsignedBigInteger('ciudad_id')->nullable();
            $table->string('direccion',100)->nullable();
            $table->string('telefono1',30)->nullable();
            $table->string('telefono2',30)->nullable();
            $table->timestamp('capacitacion')->nullable();
            $table->string('email_cliente',100)->nullable();
            $table->string('agencia_id')->nullable();
            $table->unsignedBigInteger('tipocl_id')->nullable();
            $table->string('base_id',100)->nullable();
            $table->string('clave_id', 100)->nullable();
            $table->string('base_nombre',100)->nullable();
            $table->string('servidor_nombre',100)->nullable();
            $table->string('servidor_ip',100)->nullable();
            $table->string('webgestion_url',100)->nullable();
            $table->string('version_nombre',100)->nullable();
            $table->string('erp_nombre',100)->nullable();
            $table->string('prov_datos',100)->nullable();
            $table->integer('preventa')->default('0');
            $table->integer('autoventa')->default('0');
            $table->integer('distribucion')->default('0');
            $table->integer('supervisor')->default('0');
            $table->integer('apedir')->default('0');
            $table->integer('erp')->default('0');
            $table->integer('salud')->default('0');
            $table->integer('ramo')->default('0');
            $table->integer('felam')->default('0');
            $table->integer('fac_electronica')->default('0');
            $table->integer('cert_felam')->default('0');
            $table->timestamp('cert_felam_i')->nullable();
            $table->timestamp('cert_felam_f')->nullable();
            $table->integer('contrato_felam')->default('0');
            $table->string('contribuyente_id')->nullable();
            $table->integer('contrato_app')->default('0');
            $table->string('contrato_numero')->nullable();
            $table->string('contrato_imagen')->nullable();
            $table->string('nombre_contacto1')->nullable();
            $table->string('telefono_contacto1')->nullable();
            $table->string('cargo_contacto1')->default('GERENTE')->nullable();
            $table->string('email_contacto1')->nullable();
            $table->string('nombre_contacto2')->nullable();
            $table->string('telefono_contacto2')->nullable();
            $table->string('cargo_contacto2')->default('SUPERVISOR')->nullable();
            $table->string('email_contacto2')->nullable();
            $table->string('nombre_contacto3')->nullable();
            $table->string('telefono_contacto3')->nullable();
            $table->string('cargo_contacto3')->default('CONTABILIDAD')->nullable();
            $table->string('email_contacto3')->nullable();
            $table->string('nombre_contacto4')->nullable();
            $table->string('telefono_contacto4')->nullable();
            $table->string('cargo_contacto4')->default('PAGOS')->nullable();
            $table->string('email_contacto4')->nullable();
            $table->string('nombre_contacto5')->nullable();
            $table->string('telefono_contacto5')->nullable();
            $table->string('cargo_contacto5')->default('FACTURADOR')->nullable();
            $table->string('email_contacto5')->nullable();
            $table->integer('activo')->default('1');
            $table->longText('observacion')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // llaves foraneas
            //$table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('pais_id')->references('id')->on('paises');
            // $table->foreign('departamento_id')->references('id')->on('departamentos');
            // $table->foreign('ciudad_id')->references('id')->on('ciudades');
            // $table->foreign('tipocl_id')->references('id')->on('tipocls');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clientes');
    }
}
