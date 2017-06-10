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
            $table->integer('id_user')->unsigned();
            $table->tinyInteger('tipImobil'); //0-Terenuri, 1-Birouri, 2-Locuinte
            $table->integer('id_imobil');
            $table->integer('id_imagine')->unsigned();
            $table->string('titlu');
            $table->string('descriere', 2500);
            $table->integer('pret');
            $table->string('tipTranzactie');
            $table->boolean('pretNegociabil');
            $table->double('longitudine');
            $table->double('latitudine');
            $table->timestamps();
        });

        Schema::table('anunturi', function(Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_imagine')->references('id')->on('imagines');
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