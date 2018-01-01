<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('fecha_pago');	
            $table->integer('consorcista_id');	
            $table->integer('liquidacion_id');	

            $table->foreign('consorcista_id')->references('id')->on('consorcistas');
            $table->foreign('liquidacion_id')->references('id')->on('liquidacions');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos');
    }
}
