<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBirousTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('birouri', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tip');
            $table->integer('suprafata');
            $table->string('localitate');
            $table->string('zona');
            $table->string('compartimentare');
            $table->string('orientare');
            $table->integer('anConstructie');
            $table->integer('etaj');
            $table->integer('totalEtaje');
            $table->integer('locuriParcare');
            $table->integer('numarBai');
            $table->boolean('balcon');
            $table->boolean('terasa');
            $table->boolean('supravegheatVideo');
            $table->boolean('lift');
            $table->boolean('alarma');
            $table->boolean('aerConditionat');
            $table->boolean('salaSedinte');
            $table->boolean('receptie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('birouri');
    }
}
