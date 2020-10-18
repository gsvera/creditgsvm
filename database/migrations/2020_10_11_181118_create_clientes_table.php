<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('credito_vigente')->default('No');
            $table->string('nombre_cliente');
            $table->integer('edad_cliente');
            $table->date('fecha_nacimiento_cliente');
            $table->string('genero');
            $table->string('curp');
            $table->string('rfc');
            $table->string('email_cliente');
            $table->string('dependencia');
            $table->string('ingreso_cliente');
            $table->string('direccion_cliente');
            $table->integer('codigo_postal');
            $table->string('numero_cliente');
            $table->string('estado_civil');
            $table->string('nombre_conyugue')->nullable();
            $table->integer('numero_conyugue')->nullable();
            $table->string('nombre_referencia_uno')->nullable();
            $table->integer('numero_referencia_uno')->nullable();
            $table->string('nombre_referencia_dos')->nullable();
            $table->integer('numero_referencia_dos')->nullable();
            $table->timestamps();
            #validar si funciona
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
