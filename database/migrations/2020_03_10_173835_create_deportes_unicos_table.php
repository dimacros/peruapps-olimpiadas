<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeportesUnicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deportes_unicos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('complejo_deportivo_id');
            $table->string('deport_name');

            $table->foreign('complejo_deportivo_id')->references('id')->on('complejos_deportivos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deportes_unicos');
    }
}
