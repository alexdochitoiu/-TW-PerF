<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMesajsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesaje', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_sender')->unsigned();
            $table->integer('id_receiver')->unsigned();
            $table->string('mesaj', 1000);
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
        Schema::dropIfExists('mesaje');
    }
}
