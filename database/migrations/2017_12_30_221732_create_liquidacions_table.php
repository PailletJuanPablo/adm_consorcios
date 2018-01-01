<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiquidacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liquidacions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->double('monto_total')->unsigned();
            $table->double('cantidad_items')->unsigned();
            $table->date('periodo');
            $table->integer('edificio_id')->unsigned();
            $table->foreign('edificio_id')->references('id')->on('edificios');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('liquidacions');
    }
}
