<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnuntsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anunturi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->tinyInteger('tipImobil'); //0-Terenuri, 1-Birouri, 2-Locuinte
            $table->integer('id_imobil');
            $table->integer('id_imagine');
            $table->string('titlu');
            $table->string('descriere', 2500);
            $table->integer('pret');
            $table->string('tipTranzactie');
            $table->double('longitudine');
            $table->double('latitudine');
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
        Schema::dropIfExists('anunturi');
    }
}