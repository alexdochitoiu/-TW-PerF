<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTerensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terenuri', function (Blueprint $table) {
            $table->string('id');
            $table->string('tip');
            $table->integer('suprafata');
            $table->string('localitate');
            $table->string('zona');
            $table->boolean('electricitate');
            $table->boolean('gaz');
            $table->boolean('gard');
            $table->boolean('apa');
            $table->boolean('canalizare');
            $table->boolean('irigatie');
        });
        Schema::table('terenuri', function(Blueprint $table) {
            $table->foreign('id')->references('id')->on('imobils');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('terenuri');
    }
}
