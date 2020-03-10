<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolideportivoDeportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polideportivo_deportes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('polideportivo_id');
            $table->string('deport_name');
            $table->decimal('total_occupied_area');
            $table->string('location_indicator');

            $table->foreign('polideportivo_id')->references('id')->on('polideportivos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('polideportivo_deportes');
    }
}
