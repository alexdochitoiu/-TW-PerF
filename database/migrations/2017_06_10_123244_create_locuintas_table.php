<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocuintasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locuinte', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tip');
            $table->integer('suprafata');
            $table->string('localitate');
            $table->string('zona');
            $table->string('compartimentare');
            $table->string('orientare');
            $table->string('stare');
            $table->integer('anConstructie');
            $table->integer('etaj');
            $table->integer('totalEtaje');
            $table->integer('numarBai');
            $table->integer('numarCamere');
            $table->boolean('centralaTermica');
            $table->boolean('balcon');
            $table->boolean('gradina');
            $table->boolean('mobilat');
            $table->boolean('parcare');
            $table->boolean('supravegheatVideo');
            $table->boolean('usaBlindata');
            $table->boolean('alarma');
            $table->boolean('detectorGaz');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locuinte');
    }
}
