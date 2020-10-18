<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creditos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estatus_credito');
            $table->decimal('interes_porcentaje');
            $table->decimal('capital_total');
            $table->decimal('total_pagar');
            $table->integer('plazo');
            $table->decimal('cuota');
            $table->decimal('capital_plazo');
            $table->decimal('interes');
            $table->decimal('iva');
            $table->string('id_cliente');
            $table->string('nombre_cliente');
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
        Schema::dropIfExists('creditos');
    }
}
